<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Document;
use GuzzleHttp\Client;
use App\Models\Evento;
use Illuminate\Support\Carbon;
class CuadrarDocs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:cuadrar-docs';

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
        $this->info("Cuadrar  CSV");
        $filePath = storage_path('csv/b5a68d66-4e88-4c5b-bda2-06bb12c56559_cosmosdb.csv');
        $data = $this->readCSV($filePath);

        $this->info("Datos leidos: " . count($data));

        //read $data
        foreach ($data as $row) {
            // Process each row of the CSV data
            $this->processRow($row);
        }

        


    }
    public function readCSV($filePath)
    {
        $data = [];
        $file = fopen($filePath, 'r');
    
        if ($file !== false) {
            while (($row = fgetcsv($file, 0, '|')) !== false) {
                $data[] = $row;
            }
    
            fclose($file);
        }
    
        return $data;
    }
    

    public function processRow($row)
    {
    // Assuming the CSV has columns: id, name, email
    $id = $row[0];
    $document = "";
    if (preg_match('/^([a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12})$/i', $id)) {
        $document =    Document::where('GlobalDocumentId', $id)->first();
    } else {
        return;
    }


  

   

    if(!$document){
        $this->info('Documento no encontrado: ['. $id .']');
      //  $this->info('Vamos a buscar al WS');
         //llamar al metodo q trae el document
         $endpoint = env('GETDOCUMENT_ENDPOINT');
         $username = env('GETDOCUMENT_USERNAME');
         $password = env('GETDOCUMENT_PASSWORD');
         $accountcode = env('ACCOUNTCODE');
 
       //  $this->info("ENDPOINT: " . $endpoint);
       //  $this->info("Username: " . $username);
       //  $this->info("Password: " . $password);
       //  $this->info("AccountCode:  " . $accountcode);
 
         $client = new Client();
         //create de url endpoint with param
         //SenderCode=76178493-5&GlobalDocumentId=2b21c384-fb22-af07-bbff-dc07a5b3f899
         $url = $endpoint . "?SenderCode=" . $accountcode ."&GlobalDocumentId=" .$id;
       //  $this->info("URL: " . $url);
         //pass user and password as base64
         $credentials = base64_encode("$username:$password");
         // execute GET 
         $response = $client->request('POST', $url, [
             'headers' => [
                 'Authorization' => 'Basic ' . $credentials,
             ],
         ]);
 
         // Obtiene el cuerpo de la respuesta
         $body = $response->getBody();
  
 
        // $this->info('Recibido :['.$body."] Documentos desde GetDocument");

         $body = $response->getBody();
         $data = json_decode($body, true);

 
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

              
                 try {
                     $documento->save();
                     $evento = new Evento();
                     $evento->fecha_evento = Carbon::now()->format('Y-m-d H:i:s');
                     $evento->observacion = "Request a API GetDocument Manual";
                     $documento->eventos()->save($evento);
                     $this->info("GlobalDocumentId : [".$documento->GlobalDocumentId."] Registro Agregado");
                 } catch (\Exception $e) {
                    $this->error("GlobalDocumentId : [" . $documento->GlobalDocumentId . "]  . Error Insert: " . $e->getMessage());
                     continue;
                 }
                }
            }
        
        return;
    }else{
        $this->info('Documento ya existe: ['. $id .']');
        return;
    }

 

    }
}



