<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Monitor;
use App\Models\Document;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use phpseclib3\Net\SFTP;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CheckAvailable extends Command
{
    protected $signature = 'app:check-available';

    protected $description = 'Comando para verificar disponibilidad de las plataformas';

    protected $sftpConfig;
    protected $getReceivedDocumentConfig;
    protected $getDocumentConfig;
    protected $confirmReceivedDocumentConfig;

    public function __construct()
    {
        parent::__construct();

        $this->sftpConfig = [
            'host' => env('SFTP_HOSTNAME'),
            'port' => env('SFTP_PORT'),
            'username' => env('SFTP_USERNAME'),
            'password' => env('SFTP_PASSWORD'),
        ];

        $this->getReceivedDocumentConfig = [
            'endpoint' => env('GETRECEIVEDDOCUMENT_ENDPOINT'),
            'username' => env('GETRECEIVEDDOCUMENT_USERNAME'),
            'password' => env('GETRECEIVEDDOCUMENT_PASSWORD'),
            'accountcode' => env('ACCOUNTCODE'),
        ];

        $this->getDocumentConfig = [
            'endpoint' => env('GETDOCUMENT_ENDPOINT'),
            'username' => env('GETDOCUMENT_USERNAME'),
            'password' => env('GETDOCUMENT_PASSWORD'),
            'accountcode' => env('ACCOUNTCODE'),
        ];

        $this->confirmReceivedDocumentConfig = [
            'endpoint' => env('CONFIRM_RECEIVEDDOCUMENT_ENDPOINT'),
            'username' => env('CONFIRM_RECEIVEDDOCUMENT_USERNAME'),
            'password' => env('CONFIRM_RECEIVEDDOCUMENT_PASSWORD'),
            'accountcode' => env('ACCOUNTCODE'),
        ];
    }

    public function handle()
    {
        $this->checkSFTP();
        $this->checkGetReceivedDocument();
        $this->checkGetDocument();
        $this->checkConfirmReceivedDocument();
        $this->checkLastReceivedDocument();
    }

    protected function checkSFTP()
    {
        Log::info("Vamos a ver la disponibilidad del SFTP");

        $monitor = Monitor::where('componente', 'SFTP')->first();

        try {
            $sftp = new SFTP($this->sftpConfig['host'], $this->sftpConfig['port']);
            if (!$sftp->login($this->sftpConfig['username'], $this->sftpConfig['password'])) {
                $this->updateMonitorState($monitor, false, "USER O PASS FALLIDA PARA CONECTAR A SFTP");
            }

            if ($sftp->isConnected()) {
                $this->updateMonitorState($monitor, true, "SFTP ONLINE");
            }
            $sftp->disconnect();
        } catch (\Exception $e) {
            $this->updateMonitorState($monitor, false, $e->getMessage());
        }
    }

    protected function checkGetReceivedDocument()
    {
        Log::info("Ejecutando Call API Get-Received-Document");

        $m1 = Monitor::where('componente', 'GETRECEIVEDDOCUMENT')->first();

        try {
            $client = new Client();
            $response = $client->request('GET', $this->getReceivedDocumentConfig['endpoint'], [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->getReceivedDocumentConfig['username'] . ':' . $this->getReceivedDocumentConfig['password']),
                ],
                'query' => ['AccountCode' => $this->getReceivedDocumentConfig['accountcode']]
            ]);

            $this->updateMonitorState($m1, $response->getStatusCode() === 200, "API GETRECEIVEDDOCUMENT ONLINE");
        } catch (\Exception $e) {
            $this->updateMonitorState($m1, false, "API GETRECEIVEDDOCUMENT OFFLINE Error [" . substr($e->getMessage(), 0, 100) . "]");
        }
    }

    protected function checkGetDocument()
    {
        Log::info("Ejecutando Call API Get-Document");

        $m2 = Monitor::where('componente', 'GETDOCUMENT')->first();

        try {
            $client = new Client();
            $response = $client->request('POST', $this->getDocumentConfig['endpoint'], [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->getDocumentConfig['username'] . ':' . $this->getDocumentConfig['password']),
                ],
                'form_params' => [
                    'SenderCode' => $this->getDocumentConfig['accountcode'],
                ]
            ]);

            $this->updateMonitorState($m2, $response->getStatusCode() === 200, "API GETDOCUMENT ONLINE");
        } catch (\Exception $e) {
            $this->updateMonitorState($m2, false, "API GETDOCUMENT OFFLINE Error [" . substr($e->getMessage(), 0, 100) . "]");
        }
    }

    protected function checkConfirmReceivedDocument()
    {
        Log::info("Ejecutando Call API Confirm-Received-Document");

        $m3 = Monitor::where('componente', 'CONFIRM_RECEIVEDDOCUMENT')->first();

        try {
            $client = new Client();
            $response = $client->post($this->confirmReceivedDocumentConfig['endpoint'], [
                'headers' => [
                    'Authorization' => 'Basic ' . base64_encode($this->confirmReceivedDocumentConfig['username'] . ':' . $this->confirmReceivedDocumentConfig['password']),
                ],
                'json' => [$globalid]
            ]);

            $this->updateMonitorState($m3, $response->getStatusCode() === 200, "API CONFIRM_RECEIVEDDOCUMENT ONLINE");
        } catch (\Exception $e) {
            $this->updateMonitorState($m3, false, "API CONFIRM_RECEIVEDDOCUMENT OFFLINE Error [" . substr($e->getMessage(), 0, 100) . "]");
        }
    }

    protected function checkLastReceivedDocument()
    {
        Log::info("Ejecutando Checker del último documento recibido");

        $m4 = Monitor::where('componente', 'ULTIMO-DOCUMENTO')->first();
        $latestDocument = Document::latest()->first();

        if ($latestDocument) {
            $this->updateMonitorState($m4, true, "ÚLTIMO DOCUMENTO RECIBIDO [" . $latestDocument->created_at . "]");
        } else {
            $this->updateMonitorState($m4, false, "NO HAY DOCUMENTOS RECIBIDOS");
        }
    }

    protected function updateMonitorState($monitor, $estado, $observacion)
    {
        $monitor->update([
            'estado' => $estado,
            'observacion' => $observacion,
            'last_check' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
