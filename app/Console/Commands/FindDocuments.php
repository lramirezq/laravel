<?php

namespace App\Console\Commands;
use Illuminate\Support\Carbon;
use App\Models\Mantenedor;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use App\Models\Document;
use App\Models\Evento;
use GuzzleHttp\Client;

class FindDocuments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:find-documents';

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


        $datefrom = "2024-03-14";
        $dateto = "2024-03-14";
        // $datefrom = date("Y-m-d");
        // $dateto = date("Y-m-d");



        $types_documents = Mantenedor::where('tipo', 'TypeDocument')->pluck('valor');
        Log::info("Buscando Documentos desde: [" . $datefrom . "] Hasta : [" . $dateto . "]");

        foreach ($types_documents as $type_document) {
           
            Log::info("Documento:   [". Mantenedor::where('tipo', 'TypeDocument')->where('valor', $type_document)->value('misc')."] Codigo : [".$type_document."]");
            $client = new Client();
            try {
    
    
                $response = $client->request('POST', 'https://developers.gosocket.net/api/v1/Document/GetDocument', [
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded',
                        'Authorization' => 'Basic ZDcyN2UwOWItYmQyNS00MzA2LTkzNzUtODg3YTI0MzBlMWY3OjU1ZjA3YjU5YjI0YTRlYw==',
                        // Agrega cualquier otro encabezado necesario aquí
                    ],
                    'form_params' => [
                        'SenderCode' => '76245828-4',
                        'DateFrom' => $datefrom,
                        'DateTo' => $dateto,
                        'DocumentTypeID' => $type_document,
                        //'Number' => $numeroEntero,
                        'Number' => "*",
                        'ResultMaxItemCount' => '10000',
                    ]
                ]);
    
                $body = $response->getBody();
                $data = json_decode($body, true);
    
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
                } else {
                    // Manejar el caso en que la decodificación falla
                    echo "No se pudo decodificar el JSON";
                }
            } catch (\Exception $e) {
                Log::error("ERROR Buscando Documentos " . $e->getMessage());
    
            }
        }



        

       


        return 0;
    }
}
