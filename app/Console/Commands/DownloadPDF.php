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
class DownloadPDF extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:download-pdf';

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
       
        Log::info('Inicio descarga de PDF');
        $documents = Document::whereNull('path_pdf')->get();
        Log::info("A descargar [" .$documents->count()."] PDF");
        foreach ($documents as $document) {
            Log::debug("Descargando Documento PDF: [" .$document->Number."]");
            $vv = $d = Document::find($document->id)->path_pdf;
            if ($vv != null){
                continue;
            }
            try {
                $response = Http::get($document->UrlPdf);
    
               // Verificar si la solicitud fue exitosa
               if ($response->successful()) {
                   // Obtener el contenido del archivo
                   $contents = $response->body();
    
                   // Guardar el archivo en el directorio de almacenamiento de Laravel
                   //DocumentReceiverCode-DocumentTypeId-Number
                   $rutaArchivo = 'archivos/' . basename($document->DocumentReceiverCode.'-'.$document->DocumentTypeId.'-'.$document->Number) . '.pdf'; // Ruta donde se guardará el archivo
                   Storage::put($rutaArchivo, $contents);
                   
                   $document->path_pdf=$rutaArchivo;
                  
                   try {
                    $document->save();
                    $evento = new Evento();
                    $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                    $evento->observacion = "PDF Descargado en [".$rutaArchivo."]" ;
                    $document->eventos()->save($evento);

                } catch (\Exception $e) {
                    continue;
                }
               
               } else {
                   // La solicitud no fue exitosa
                   Log::error( 'ERROR: al descargar PDF ' . $document->Number);
               }
    
           } catch (\Exception $e) {
               continue;
           }


        }



   
    }
}
