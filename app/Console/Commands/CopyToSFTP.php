<?php

namespace App\Console\Commands;

use App\Models\Document;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use App\Models\Evento;
use Illuminate\Support\Facades\Log;
use Illuminate\Filesystem\Filesystem;
use phpseclib3\Net\SFTP;

class CopyToSFTP extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:copy-to-sftp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This function allows copying docs to an SFTP server';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('------------Copy to SFTP -------------------');

        // Establecer la conexión SFTP fuera del bucle
        $sftp = $this->establishSFTPConnection();

        // Buscar todos los pendientes de pasar por SFTP
        $documents = Document::whereNull('copy_to_sftp')
            ->whereNotNull('path_pdf')
            ->whereNotNull('path_xml')
            ->limit(100)
            ->get();
        Log::info("Vamos a copiar XML y PDF de [" . $documents->count() . "] Documentos");

        foreach ($documents as $document) {
            $vv = Document::find($document->id)->copy_to_sftp;
            if ($vv != null) {
                Log::info("Otro proceso ya realizó la copia a SFTP[" . $document->Number . "]");
                continue;
            }

            // Debes pasar el pdf y el xml
            $pdf = '/app/' . $document->path_pdf;
            $xml = '/app/' . $document->path_xml;

            Log::debug("Buscando files [" . $pdf . "] xml [" . $xml . "]");
            if ($this->verificarArchivo($pdf) && $this->verificarArchivo($xml)) {
                $valida = 0;

                try {
                    if (!$this->copiarArchivoPorSFTP($sftp, $pdf)) {
                        continue;
                    }
                    $document->save();
                    $this->registerEvent($document, "PDF Copiado a Servidor SFTP");
                    $valida++;
                } catch (\Exception $e) {
                    Log::error("Error al Copiar a SFTP PDF [" . $e->getMessage() . "]");
                }

                try {
                    if (!$this->copiarArchivoPorSFTP($sftp, $xml)) {
                        continue;
                    }
                    $document->save();
                    $this->registerEvent($document, "XML Copiado a Servidor SFTP");
                    $valida++;
                } catch (\Exception $e) {
                    Log::error("Error al Copiar a SFTP XML" . $e->getMessage());
                }

                if ($valida == 2) {
                    $document->copy_to_sftp = true;
                    $document->save();
                }
            } else {
                Log::error("No existen ambos documentos para pasar a SFTP");
            }
        }

        // Cerrar la conexión SFTP al final del proceso
        $sftp->disconnect();
    }

    private function establishSFTPConnection()
    {
        $host = env('SFTP_HOSTNAME');
        $port = env('SFTP_PORT');
        $user = env('SFTP_USERNAME');
        $password = env('SFTP_PASSWORD');

        try {
            $sftp = new SFTP($host, $port);
            if (!$sftp->login($user, $password)) {
                Log::error('USER O PASS FALLIDA PARA CONECTAR A SFTP');
                throw new \Exception('Autenticación fallida para SFTP');
            }
            return $sftp;
        } catch (\Exception $e) {
            Log::error('Error al establecer la conexión SFTP: ' . $e->getMessage());
            throw $e;
        }
    }

    private function verificarArchivo($rutaArchivo)
    {
        $filesystem = new Filesystem();

        // Verificar si el archivo existe en el almacenamiento
        if ($filesystem->exists(storage_path($rutaArchivo))) {
            return true;
        } else {
            return false;
        }
    }

    private function copiarArchivoPorSFTP($sftp, string $archivo)
    {
	    Log::info('Vamos a pasar por SFTP el archivo: ' . $archivo);

	          $host = env('SFTP_HOSTNAME');
	          $user = env('SFTP_USERNAME');
	          $port = env('SFTP_PORT');
	          $password = env('SFTP_PASSWORD');
	          $path = env('SFTP_PATH');
	          Log::info('Host: [' . $host . '] User: [' . $user . '] Port: [' . $port . ']');

	          Log::info("esto llego: " . $archivo);
	          $rutaArchivoLocal = storage_path("{$archivo}");
	          Log::info("este es el path completo: " . $rutaArchivoLocal);
	          $rutaArchivoRemoto = '/files/' . basename($archivo);


	          Log::info('archivo remoto: ' . $rutaArchivoRemoto);


	          if (!file_exists($rutaArchivoLocal)) {
	              Log::error('El archivo local no existe en la ruta especificada: ' . $rutaArchivoLocal);
	              // Manejo del error aquí
	              return false; // Por ejemplo, puedes retornar false si el archivo local no existe
	          }

	          try {

	             

	              // Verificar si el archivo remoto ya existe
	              if ($sftp->file_exists($rutaArchivoRemoto)) {
	                  Log::error('El archivo remoto ya existe: ' . $rutaArchivoRemoto);
	                  return true; // Si el archivo remoto ya existe, puedes retornar false aquí
	              }

	              try {
	                  if (!$sftp->put($rutaArchivoRemoto, $rutaArchivoLocal, SFTP::SOURCE_LOCAL_FILE)) {
	                      Log::error('Error al pasar el archivo: ' . $sftp->getLastSFTPError());
                    
	                      return false;
	                  }
	              } catch (\Exception $e) {
	                  Log::error('Excepción al pasar el archivo: ' . $e->getMessage());
                
	                  return false;
	              }

	        
	              Log::info('Copiado Exitosamente' . $rutaArchivoRemoto);
	              return true; // Indicar que la copia fue exitosa

	          } catch (\Exception $e) {
	              Log::error('Ocurrio un error conectando: [' . $e->getTrace() . "]");
	              return false;
	          }
    }

    private function registerEvent($document, $message)
    {
        $evento = new Evento();
        $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
        $evento->observacion = $message;
        $document->eventos()->save($evento);
    }
}
