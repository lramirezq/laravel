<?php

namespace App\Console\Commands;

use App\Models\Document;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use App\Models\Mantenedor;
use Illuminate\Support\Facades\Log;
use App\Models\Evento;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Http;
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
    protected $description = 'This function allow copy docs to sftp server';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Copy to SFTP ');
      
        //buscar todos los pendientes de pasar por SFTP
        $documents = Document::whereNull('copy_to_sftp')
                     ->whereNotNull('path_pdf')
                     ->whereNotNull('path_xml')
                     ->get();
        Log::info(" Vamos a copiar XML y PDF de  [" .$documents->count()."] Documentos");
        foreach ($documents as $document) {

            //debemos pasar el pdf y el xml
            $pdf = '/app/' . $document->path_pdf;
            $xml = '/app/' . $document->path_pdf;

            Log::debug("Buscando files [" . $pdf . "] xml [" . $xml . "]");
            if ($this->verificarArchivo($pdf) && $this->verificarArchivo($xml)) {
                //Vamos a pasar el PDF

                $valida = 0;

                try {
                    $this->copiarArchivoPorSFTP($pdf);
                    $document->save();
                    $evento = new Evento();
                    $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                    $evento->observacion = "PDF Copiado a Servidor SFTP";
                    $document->eventos()->save($evento);
                    Log::debug("PDF Copiado SFTP: " . $document->Number);
                    $valida = $valida + 1;
                } catch (\Exception $e) {
                    Log::error("Error al Copiar a SFTP PDF" . $e->getMessage());
                    continue;
                }



                try {
                    $this->copiarArchivoPorSFTP($xml);
                    $document->save();
                    $evento = new Evento();
                    $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                    $evento->observacion = "XML Copiado a Servidor SFTP";
                    $document->eventos()->save($evento);
                    Log::info("XML Copiado SFTP: " . $document->Number);
                    $valida = $valida + 1;
                } catch (\Exception $e) {
                    Log::error("Error al Copiar a SFTP XML" . $e->getMessage());
                    $document->save();
                    continue;
                }

                try {
                    Log::info("valida : ".$valida);
                    if ($valida == 2) {
                        $document->copy_to_sftp = true;
                        $document->save();
                    }
                } catch (\Exception $e) {
                    Log::error("" . $e->getMessage());
                    $document->save();
                    continue;
                }

            }else{
                Log::error("No existen ambos documentos para pasar a SFTP");
            }





        }



    }


    public function verificarArchivo($rutaArchivo)
    {
        $filesystem = new Filesystem();

        // Verificar si el archivo existe en el almacenamiento
        if ($filesystem->exists(storage_path($rutaArchivo))) {
            return true;
        } else {
            return false;
        }
    }


    public function copiarArchivoPorSFTP(string $archivo)
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
        }



        try {

            // Crear una instancia de SFTP
            $sftp = new SFTP($host, $port);

            // Autenticarse con usuario y contraseña
            if (!$sftp->login($user, $password)) {
                Log::error('USER O PASS FALLIDA PARA CONECTAR A SFTP');
            }


            try {
                if (!$sftp->put($rutaArchivoRemoto, $rutaArchivoLocal, SFTP::SOURCE_LOCAL_FILE)) {
                    Log::error('Error al pasar el archivo: ' . $sftp->getLastSFTPError());
                }
            } catch (\Exception $e) {
                Log::error('Excepción al pasar el archivo: ' . $e->getMessage());
            }

            // Cerrar la conexión SFTP
            $sftp->disconnect();

            Log::info('Copiado Exitosamente' . $rutaArchivoRemoto);

        } catch (\Exception $e) {
            Log::error('Ocurrio un error conectando' . $e->getMessage());
        }
    }
}
