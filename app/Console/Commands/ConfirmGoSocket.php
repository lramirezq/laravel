<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Evento;
use GuzzleHttp\Client;
use App\Models\Document;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

class ConfirmGoSocket extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:confirm-go-socket';

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
        //Vamos a confirmar que lo tenemos
        Log::info("Ejecutando Call API Get-Received-Document");
        $endpoint = env('CONFIRM_RECEIVEDDOCUMENT_ENDPOINT');
        $username = env('CONFIRM_RECEIVEDDOCUMENT_USERNAME');
        $password = env('CONFIRM_RECEIVEDDOCUMENT_PASSWORD');
        $accountcode = env('ACCOUNTCODE');


        //buscar todos los pendientes de pasar por SFTP
        $documents = Document::where('confirm_gosocket', false)
            ->whereNotNull('path_pdf')
            ->whereNotNull('copy_to_sftp')
            ->whereNotNull('path_xml')->get();
        Log::info("Vamos a confirmar  [" . $documents->count() . "] Documentos");

        foreach ($documents as $document) {
            $globalid = $document->GlobalDocumentId;
            $client = new Client();
            //create de url endpoint with param
            $url = $endpoint . "?AccountCode=" . $accountcode;
            //pass user and password as base64
            $credentials = base64_encode("$username:$password");

            // Realizar la solicitud POST
            $response = $client->post($url, [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Basic ' . $credentials
                ],
                'json' => [$globalid]
            ]);

            // Obtener el cuerpo de la respuesta
            $responseBody = $response->getBody()->getContents();
            $jsonResponse = json_decode($responseBody, true);
            $valida = $jsonResponse['StatusMessage'];
            $mensaje = "";
            if ($valida == "OK") {
                $document->confirm_gosocket = true;
                $mensaje = "GOSOCKET CONFIRMACION - OK  con GlobalDocumentId : " . $globalid;
                $document->save();
            } else {
                $mensaje = "GOSOCKET CONFIRMACION - ERROR: " . $valida;
                $document->confirm_gosocket = false;
                $document->save();
            }

            Log::info("GOSOCKET CONFIRMACION - Esto respondio: " . $valida);



            try {
                $document->save();
                $evento = new Evento();
                $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                $evento->observacion = $mensaje;
                $document->eventos()->save($evento);

            } catch (\Exception $e) {
                Log::error("Error al guardar el evento " . $e);
                continue;
            }


        }



    }
}
