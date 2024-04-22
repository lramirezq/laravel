<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Env;
use GuzzleHttp\Client;
use App\Models\Document;
use App\Models\Evento;
use Illuminate\Support\Carbon;

class GetReceivedDocument extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:get-received-document';

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
        Log::info("Ejecutando Call API Get-Received-Document");
        $endpoint = env('GETRECEIVEDDOCUMENT_ENDPOINT');
        $username = env('GETRECEIVEDDOCUMENT_USERNAME');
        $password = env('GETRECEIVEDDOCUMENT_PASSWORD');
        $accountcode = env('ACCOUNTCODE');

        Log::info("ENDPOINT: " . $endpoint);
        Log::info("Username: " . $username);
        Log::info("Password: " . $password);
        Log::info("AccountCode:  " . $accountcode);

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
        $body = $response->getBody();
        $data = json_decode($body, true);
        $cdata = $data['CData'];

        if (isset($data['CData'])) {


            for ($i = 0; $i < count($cdata); $i++) {
                $globalid = $cdata[$i]['GlobalDocumentId'];
                $xmlString = $cdata[$i]['XmlString'];

                $xml = simplexml_load_string($xmlString);

                // Convertir a JSON
                $json = json_encode($xml);
                $array = json_decode($json, true);
                $folio = $array['SetDTE']['DTE']['Documento']['Encabezado']['IdDoc']['Folio'];
                $tipoDoc = $array['SetDTE']['DTE']['Documento']['Encabezado']['IdDoc']['TipoDTE'];

                Log::info("GlobalDocumentId : [" . $globalid . "] Folio : [" . $folio . "] TipoDTE[" . $tipoDoc . "]");

                //llamar al metodo q trae el document
                $getdocument_endpoint = env('GETDOCUMENT_ENDPOINT');
                $getdocument_username = env('GETDOCUMENT_USERNAME');
                $getdocument_password = env('GETDOCUMENT_PASSWORD');
                $getdocument_credentials = base64_encode("$getdocument_username:$getdocument_password");
                $response = $client->request('POST', $getdocument_endpoint, [
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded',
                        'Authorization' => 'Basic ' . $credentials,

                    ],
                    'form_params' => [
                        'SenderCode' => $accountcode,
                        'DocumentTypeID' => $tipoDoc,
                        'GlobalDocumentId' => $globalid,

                    ]
                ]);

                $body = $response->getBody();
                $data = json_decode($body, true);

                Log::info($data);
                Log::info('Total doc Respuesta : ' . count($data['Documents']));
                if ($data['Documents'] !== null) {
                    // Grabar a la BD 
                    foreach ($data['Documents'] as $document) {
                        $documento = new Document();
                        // Acceder a los atributos de cada documento
                        $documento->Number = $documento['Number'];
                        $documento->UrlPdf = $document['UrlPdf'];
                        $documento->UrlXml = $document['UrlXml'];
                        $documento->UrlJson = $document['UrlJson'];
                        $documento->BarCodeText = $document['BarCodeText'];
                        $documento->GlobalDocumentId = $document['GlobalDocumentId'];
                        $documento->CountryDocumentId = $document['CountryDocumentId'];
                        $documento->ExternalId = $document['ExternalId'];
                        $documento->CountryId = $document['CountryId'];
                        $documento->Date = $document['Date'];
                        $documento->DocumentTypeId = $document['DocumentTypeId'];
                        $documento->DocumentTypeName = $document['DocumentTypeName'];
                        $documento->NetAmount = $document['NetAmount'];
                        $documento->FreeAmount = $document['FreeAmount'];
                        $documento->TaxAmount = $document['TaxAmount'];
                        $documento->TotalAmount = $document['TotalAmount'];
                        $documento->CurrencyType = $document['CurrencyType'];
                        $documento->SeriesNumber = $document['SeriesNumber'];
                        $documento->Series = $document['Series'];
                        $documento->Number = $document['Number'];
                        $documento->NumberStr = $document['NumberStr'];
                        $documento->DocumentSenderCode = $document['DocumentSenderCode'];
                        $documento->DocumentSenderName = $document['DocumentSenderName'];
                        $documento->DocumentReceiverCode = $document['DocumentReceiverCode'];
                        $documento->DocumentReceiverName = $document['DocumentReceiverName'];
                        $documento->DocumentFinancialOwnerCode = $document['DocumentFinancialOwnerCode'];
                        $documento->DocumentFinancialOwnerName = $document['DocumentFinancialOwnerName'];
                        $documento->FinancialDate = $document['FinancialDate'];
                        $documento->EstimatedPaymentDate = $document['EstimatedPaymentDate'];
                        $documento->DocumentTimeStamp = $document['DocumentTimeStamp'];
                        $documento->AuthorityTimeStamp = $document['AuthorityTimeStamp'];
                        $documento->DocumentTags = json_encode($document['DocumentTags']);
                        $documento->TwoCheck = json_encode($document['TwoCheck']);
                        $documento->Notes = json_encode($document['Notes']);
                        $documento->Offers = $document['Offers'];
                        $documento->Fields = json_encode($document['Fields']);
                        $documento->Author = $document['Author'];

                        //Agregar Evento para Documento

                        // Log::debug($document['Number']);
                        // Realizar acciones con los atributos, como imprimirlos
                        try {
                            $documento->save();
                            $evento = new Evento();
                            $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                            $evento->observacion = "Request a WebService";
                            $documento->eventos()->save($evento);

                        } catch (\Exception $e) {
                            continue;
                        }
                    }
                }

            }

            Log::info(count($cdata));


        }
    }
}
