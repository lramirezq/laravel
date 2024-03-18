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

class DownloadXML extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-xml';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info('Inicio descarga de XML');
        $documents = Document::whereNull('path_xml')->get();

        foreach ($documents as $document) {
            Log::debug("Descargando Documento XML: [" . $document->Number . "]");
            try {
                $response = Http::get($document->UrlXml);

                // Verificar si la solicitud fue exitosa
                if ($response->successful()) {
                    // Obtener el contenido del archivo
                    $contents = $response->body();

                    // Guardar el archivo en el directorio de almacenamiento de Laravel
                    //DocumentReceiverCode-DocumentTypeId-Number
                    $rutaArchivo = 'archivos/' . basename($document->DocumentReceiverCode . '-' . $document->DocumentTypeId . '-' . $document->Number) . '.xml'; // Ruta donde se guardará el archivo
                    Storage::put($rutaArchivo, $contents);

                    $document->path_xml = $rutaArchivo;

                    try {
                        $document->save();
                        $evento = new Evento();
                        $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                        $evento->observacion = "XML Descargado en [" . $rutaArchivo . "]";
                        $document->eventos()->save($evento);
                        Log::debug("XML guardado: ".$document->Number);

                    } catch (\Exception $e) {
                        Log::debug("". $e->getMessage());
                        continue;
                    }

                } else {
                    // La solicitud no fue exitosa
                    Log::info('Hubo un error al descargar el archivo desde la URL: ' . $document->Number);
                }

            } catch (\Exception $e) {
                continue;
            }
        }

    }
}
