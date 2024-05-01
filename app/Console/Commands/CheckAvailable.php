<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Monitor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use phpseclib3\Net\SFTP;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CheckAvailable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-available';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Comando para verificar disponibilidad de las plataformas';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Log::info("Vamos a ver la disponibilidad del SFTP");
        $monitor = Monitor::where('componente', 'SFTP')->first();

        $host = env('SFTP_HOSTNAME');
        $port = env('SFTP_PORT');
        $user = env('SFTP_USERNAME');
        $password = env('SFTP_PASSWORD');

        try {
            $sftp = new SFTP($host, $port);
            if (!$sftp->login($user, $password)) {
                $monitor->estado = false;
                $monitor->observacion = "USER O PASS FALLIDA PARA CONECTAR A SFTP";
                $monitor->last_check = Carbon::now()->format('Y-m-d H:i:s');
            }

            if ($sftp->isConnected()) {
                $monitor->estado = true;
                $monitor->observacion = "SFTP ONLINE";
                $monitor->last_check = Carbon::now()->format('Y-m-d H:i:s');
            }
            $sftp->disconnect();
            $monitor->save();
        } catch (\Exception $e) {
            $monitor->estado = false;
            $monitor->observacion = $e->getMessage();
            $monitor->last_check = Carbon::now()->format('Y-m-d H:i:s');
            $monitor->save();
        }

        //Prueba del Segundo Monitor

        Log::info("Ejecutando Call API Get-Received-Document");

        $endpoint = env('GETRECEIVEDDOCUMENT_ENDPOINT');
        $username = env('GETRECEIVEDDOCUMENT_USERNAME');
        $password = env('GETRECEIVEDDOCUMENT_PASSWORD');
        $accountcode = env('ACCOUNTCODE');

        Log::debug("ENDPOINT: " . $endpoint);
        Log::debug("Username: " . $username);
        Log::debug("Password: " . $password);
        Log::debug("AccountCode:  " . $accountcode);
        $m1 = Monitor::where('componente', 'GETRECEIVEDDOCUMENT')->first();
        try {
            $client = new Client();
            //create de url endpoint with param
            $url = $endpoint . "?AccountCode=" . $accountcode;
            //pass user and password as base64
            $credentials = base64_encode("$username:$password");
            // execute GET 
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => 'Basic ' . $credentials,
                ],
            ]);

            // Obtiene el cuerpo de la respuesta
            $statusCode = $response->getStatusCode();
            Log::info($statusCode);


            if ($statusCode == 200) {
                $m1->estado = true;
                $m1->observacion = "API GETRECEIVEDDOCUMENT ONLINE";
                $m1->last_check = Carbon::now()->format('Y-m-d H:i:s');
                $m1->save();
            } else {
                $m1->estado = false;
                $m1->observacion = "API GETRECEIVEDDOCUMENT OFFLINE CodeStatus [" . $statusCode . "]";
                $m1->last_check = Carbon::now()->format('Y-m-d H:i:s');
                $m1->save();
            }

        } catch (\Exception $e) {
            $m1->estado = false;
            $m1->observacion = "API GETRECEIVEDDOCUMENT OFFLINE Error [" . substr($e->getMessage(), 0, 100) . "]";
            $m1->last_check = Carbon::now()->format('Y-m-d H:i:s');
            $m1->save();
        }


        //Prueba Tercer Monitoreo

        //llamar al metodo q trae el document
        $getdocument_endpoint = env('GETDOCUMENT_ENDPOINT');
        $getdocument_username = env('GETDOCUMENT_USERNAME');
        $getdocument_password = env('GETDOCUMENT_PASSWORD');
        $globalid = "";
        $m2 = Monitor::where('componente', 'GETDOCUMENT')->first();
        Log::debug("ENDPOINT: " . $getdocument_endpoint);
        Log::debug("Username: " . $getdocument_username);
        Log::debug("Password: " . $getdocument_password);
        Log::debug("AccountCode:  " . $accountcode);

        try {

            $getdocument_credentials = base64_encode("$getdocument_username:$getdocument_password");
            $response = $client->request('POST', $getdocument_endpoint, [
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded',
                    'Authorization' => 'Basic ' . $getdocument_credentials,

                ],
                'form_params' => [
                    'SenderCode' => $accountcode,
                    //'DocumentTypeID' => $tipoDoc,
                    'GlobalDocumentId' => $globalid,

                ]
            ]);

            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $m2->estado = true;
                $m2->observacion = "API GETDOCUMENT ONLINE";
                $m2->last_check = Carbon::now()->format('Y-m-d H:i:s');
                $m2->save();
            } else {
                $m2->estado = false;
                $m2->observacion = "API GETDOCUMENT OFFLINE CodeStatus [" . $statusCode . "]";
                $m2->last_check = Carbon::now()->format('Y-m-d H:i:s');
                $m2->save();
            }

        } catch (\Exception $e) {
            $m2->estado = false;
            $m2->observacion = "API GETDOCUMENT OFFLINE Error [" . substr($e->getMessage(), 0, 100) . "]";
            $m2->last_check = Carbon::now()->format('Y-m-d H:i:s');
            $m2->save();
        }


        //Cuarta prueba
        //Vamos a confirmar que lo tenemos
        Log::info("------Ejecutando Call API Confirm----");
        $endpoint = env('CONFIRM_RECEIVEDDOCUMENT_ENDPOINT');
        $username = env('CONFIRM_RECEIVEDDOCUMENT_USERNAME');
        $password = env('CONFIRM_RECEIVEDDOCUMENT_PASSWORD');
        $accountcode = env('ACCOUNTCODE');
        $globalid = "";
        try {
            $client = new Client();
            $m3 = Monitor::where('componente', 'CONFIRM_RECEIVEDDOCUMENT')->first();
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
            $statusCode = $response->getStatusCode();
            if ($statusCode == 200) {
                $m3->estado = true;
                $m3->observacion = "API CONFIRM_RECEIVEDDOCUMENT ONLINE";
                $m3->last_check = Carbon::now()->format('Y-m-d H:i:s');
                $m3->save();
            } else {
                $m3->estado = false;
                $m3->observacion = "API CONFIRM_RECEIVEDDOCUMENT OFFLINE CodeStatus [" . $statusCode . "]";
                $m3->last_check = Carbon::now()->format('Y-m-d H:i:s');
                $m3->save();
            }

        } catch (\Exception $e) {
            $m3->estado = false;
            $m3->observacion = "API CONFIRM_RECEIVEDDOCUMENT OFFLINE Error [" . substr($e->getMessage(), 0, 100) . "]";
            $m3->last_check = Carbon::now()->format('Y-m-d H:i:s');
            $m3->save();
        }



    }


}
