<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mantenedor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use TomatoPHP\TomatoAdmin\Facade\Tomato;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use App\Models\Document;
use phpseclib3\Net\SFTP;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
class DocumentController extends Controller
{
    public string $model;

    public function __construct()
    {
        $this->model = \App\Models\Document::class;
    }

    /**
     * @param Request $request
     * @return View|JsonResponse
     */
    public function index(Request $request): View
    {
        return Tomato::index(
            request: $request,
            model: $this->model,
            view: 'admin.documents.index',
            table: \App\Tables\DocumentTable::class
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function api(Request $request): JsonResponse
    {
        return Tomato::json(
            request: $request,
            model: \App\Models\Document::class,
        );
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return Tomato::create(
            view: 'admin.documents.form',
            data: ['form'=>\App\Forms\DocumentForm::class]
        );
    }

    /**
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     */
    public function store(Request $request): RedirectResponse|JsonResponse
    {
        $response = Tomato::store(
            request: $request,
            model: \App\Models\Document::class,
            validation: [
                            'UrlPdf' => 'nullable|max:255|string',
            'UrlXml' => 'nullable|max:255|string',
            'UrlJson' => 'nullable|max:255|string',
            'BarCodeText' => 'nullable|max:255|string',
            'GlobalDocumentId' => 'nullable|max:255|string',
            'CountryDocumentId' => 'nullable|max:255|string',
            'ExternalId' => 'nullable|max:255|string',
            'CountryId' => 'nullable|max:255|string',
            'Date' => 'nullable|max:255|string',
            'DocumentTypeId' => 'nullable',
            'DocumentTypeName' => 'nullable|max:255|string',
            'NetAmount' => 'nullable',
            'FreeAmount' => 'nullable',
            'TaxAmount' => 'nullable',
            'TotalAmount' => 'nullable',
            'CurrencyType' => 'nullable|max:255|string',
            'SeriesNumber' => 'nullable|max:255|string',
            'Series' => 'nullable|max:255|string',
            'Number' => 'required',
            'NumberStr' => 'nullable|max:255|string',
            'DocumentSenderCode' => 'nullable|max:255|string',
            'DocumentSenderName' => 'nullable|max:255|string',
            'DocumentReceiverCode' => 'nullable|max:255|string',
            'DocumentReceiverName' => 'nullable|max:255|string',
            'DocumentFinancialOwnerCode' => 'nullable|max:255|string',
            'DocumentFinancialOwnerName' => 'nullable|max:255|string',
            'FinancialDate' => 'nullable|max:255|string',
            'EstimatedPaymentDate' => 'nullable|max:255|string',
            'DocumentTimeStamp' => 'nullable|max:255|string',
            'AuthorityTimeStamp' => 'nullable|max:255|string',
            'SyncPoint' => 'nullable|max:255|string',
            'DocumentTags' => 'nullable',
            'TwoCheck' => 'nullable|max:255|string',
            'Notes' => 'nullable',
            'Offers' => 'nullable|max:255|string',
            'Fields' => 'nullable',
            'Author' => 'nullable|max:255|string'
            ],
            message: __('Document updated successfully'),
            redirect: 'admin.documents.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }

    /**
     * @param \App\Models\Document $model
     * @return View|JsonResponse
     */
    public function show(\App\Models\Document $model): View|JsonResponse
    {
        return Tomato::get(
            model: $model,
            view: 'admin.documents.show',
        );
    }

    /**
     * @param \App\Models\Document $model
     * @return View
     */
    public function edit(\App\Models\Document $model): View
    {
        \App\Forms\DocumentForm::$model=$model;
        \App\Forms\DocumentForm::$route="admin.documents.update";

        return Tomato::get(
            model: $model,
            view: 'admin.documents.form',
            data: ['form'=>\App\Forms\DocumentForm::class]
        );
    }

    /**
     * @param Request $request
     * @param \App\Models\Document $model
     * @return RedirectResponse|JsonResponse
     */
    public function update(Request $request, \App\Models\Document $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::update(
            request: $request,
            model: $model,
            validation: [
                            'UrlPdf' => 'nullable|max:255|string',
            'UrlXml' => 'nullable|max:255|string',
            'UrlJson' => 'nullable|max:255|string',
            'BarCodeText' => 'nullable|max:255|string',
            'GlobalDocumentId' => 'nullable|max:255|string',
            'CountryDocumentId' => 'nullable|max:255|string',
            'ExternalId' => 'nullable|max:255|string',
            'CountryId' => 'nullable|max:255|string',
            'Date' => 'nullable|max:255|string',
            'DocumentTypeId' => 'nullable',
            'DocumentTypeName' => 'nullable|max:255|string',
            'NetAmount' => 'nullable',
            'FreeAmount' => 'nullable',
            'TaxAmount' => 'nullable',
            'TotalAmount' => 'nullable',
            'CurrencyType' => 'nullable|max:255|string',
            'SeriesNumber' => 'nullable|max:255|string',
            'Series' => 'nullable|max:255|string',
            'Number' => 'sometimes',
            'NumberStr' => 'nullable|max:255|string',
            'DocumentSenderCode' => 'nullable|max:255|string',
            'DocumentSenderName' => 'nullable|max:255|string',
            'DocumentReceiverCode' => 'nullable|max:255|string',
            'DocumentReceiverName' => 'nullable|max:255|string',
            'DocumentFinancialOwnerCode' => 'nullable|max:255|string',
            'DocumentFinancialOwnerName' => 'nullable|max:255|string',
            'FinancialDate' => 'nullable|max:255|string',
            'EstimatedPaymentDate' => 'nullable|max:255|string',
            'DocumentTimeStamp' => 'nullable|max:255|string',
            'AuthorityTimeStamp' => 'nullable|max:255|string',
            'SyncPoint' => 'nullable|max:255|string',
            'DocumentTags' => 'nullable',
            'TwoCheck' => 'nullable|max:255|string',
            'Notes' => 'nullable',
            'Offers' => 'nullable|max:255|string',
            'Fields' => 'nullable',
            'Author' => 'nullable|max:255|string'
            ],
            message: __('Document updated successfully'),
            redirect: 'admin.documents.index',
        );

         if($response instanceof JsonResponse){
             return $response;
         }

         return $response->redirect;
    }

    /**
     * @param \App\Models\Document $model
     * @return RedirectResponse|JsonResponse
     */
    public function destroy(\App\Models\Document $model): RedirectResponse|JsonResponse
    {
        $response = Tomato::destroy(
            model: $model,
            message: __('Document deleted successfully'),
            redirect: 'admin.documents.index',
        );

        if($response instanceof JsonResponse){
            return $response;
        }

        return $response->redirect;
    }


    //metodo para buscar
    public function buscar(Request $request): View
    {

        Log::info('LLegando al Metodo de Busqueda');

        $numeroDocumento = 1798491;
        $client = new Client();
        Log::info('Número de factura recibido: ' . gettype($numeroDocumento));
        $numeroEntero = intval($numeroDocumento);

        Log::info('Número de factura recibido: ' . gettype($numeroEntero));

        if (is_int($numeroEntero) && $numeroEntero != 0) {
            // El número de factura es un entero
            // Tu lógica para buscar la factura aquí
            Log::info('Número de factura recibido: ' . $numeroEntero);
            try {
                $response = $client->request('POST', 'https://developers.gosocket.net/api/v1/Document/GetDocument', [
                    'headers' => [
                        'Content-Type' => 'application/x-www-form-urlencoded',
                        'Authorization' => 'Basic ZDcyN2UwOWItYmQyNS00MzA2LTkzNzUtODg3YTI0MzBlMWY3OjU1ZjA3YjU5YjI0YTRlYw==',
                        // Agrega cualquier otro encabezado necesario aquí
                    ],
                    'form_params' => [
                        'SenderCode' => '76245828-4',
                        'DateFrom' => '2024-01-01',
                        'DateTo' => '2024-12-31',
                        'DocumentTypeID' => '33',
                        //'Number' => $numeroEntero,
                        'Number' => "*",
                        'ResultMaxItemCount' => '10000',
                    ]
                ]);

                $body = $response->getBody();
                $data = json_decode($body, true);

                /*
                Log::info('UrlPdf ' . $data['Documents'][0]['UrlPdf']);
                Log::info('UrlXml ' . $data['Documents'][0]['UrlXml']);
                Log::info('UrlJson ' . $data['Documents'][0]['UrlJson']);
                Log::info('BarCodeText ' . $data['Documents'][0]['BarCodeText']);
                Log::info('GlobalDocumentId ' . $data['Documents'][0]['GlobalDocumentId']);
                Log::info('CountryDocumentId ' . $data['Documents'][0]['CountryDocumentId']);
                Log::info('ExternalId ' . $data['Documents'][0]['ExternalId']);
                Log::info('CountryId ' . $data['Documents'][0]['CountryId']);
                Log::info('Date ' . $data['Documents'][0]['Date']);
                Log::info('DocumentTypeId ' . $data['Documents'][0]['DocumentTypeId']);
                Log::info('DocumentTypeName ' . $data['Documents'][0]['DocumentTypeName']);
                Log::info('NetAmount ' . $data['Documents'][0]['NetAmount']);
                Log::info('FreeAmount ' . $data['Documents'][0]['FreeAmount']);
                Log::info('TaxAmount ' . $data['Documents'][0]['TaxAmount']);
                Log::info('TotalAmount ' . $data['Documents'][0]['TotalAmount']);
                Log::info('CurrencyType ' . $data['Documents'][0]['CurrencyType']);
                Log::info('SeriesNumber ' . $data['Documents'][0]['SeriesNumber']);
                Log::info('Series ' . $data['Documents'][0]['Series']);
                Log::info('Number ' . $data['Documents'][0]['Number']);
                Log::info('NumberStr ' . $data['Documents'][0]['NumberStr']);
                Log::info('DocumentSenderCode ' . $data['Documents'][0]['DocumentSenderCode']);
                Log::info('DocumentSenderName ' . $data['Documents'][0]['DocumentSenderName']);
                Log::info('DocumentReceiverCode ' . $data['Documents'][0]['DocumentReceiverCode']);
                Log::info('DocumentReceiverName ' . $data['Documents'][0]['DocumentReceiverName']);
                Log::info('DocumentFinancialOwnerCode ' . $data['Documents'][0]['DocumentFinancialOwnerCode']);
                Log::info('DocumentFinancialOwnerName ' . $data['Documents'][0]['DocumentFinancialOwnerName']);
                Log::info('FinancialDate ' . $data['Documents'][0]['FinancialDate']);
                Log::info('EstimatedPaymentDate ' . $data['Documents'][0]['EstimatedPaymentDate']);
                Log::info('DocumentTimeStamp ' . $data['Documents'][0]['DocumentTimeStamp']);
                Log::info('AuthorityTimeStamp ' . $data['Documents'][0]['AuthorityTimeStamp']);
                Log::info('DocumentTags ' . json_encode($data['Documents'][0]['DocumentTags']));
                Log::info('TwoCheck ' . json_encode($data['Documents'][0]['TwoCheck']));
                Log::info('Notes ' . json_encode($data['Documents'][0]['Notes']));
                Log::info('Offers ' . $data['Documents'][0]['Offers']);
                Log::info('Fields ' . json_encode($data['Documents'][0]['Fields']));
                Log::info('Author ' . $data['Documents'][0]['Author']); */

                Log::info('Total doc Respuesta : ' . count($data['Documents']));

             //   Log::info('Respuesta de la API: [' . json_encode($data) . ']');
           
           

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
                    $documento->save();
                    Log::info( $document['Number']);
                    // Realizar acciones con los atributos, como imprimirlos
                    try {
                    $documento->save();
                    } catch (\Exception $e) {
                        continue;
                    }
                }
            } else {
                // Manejar el caso en que la decodificación falla
                echo "No se pudo decodificar el JSON";
            }



/*

            

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
                    $document->save();
                    // El archivo se ha guardado correctamente
                    Log::info( 'El archivo se ha descargado y guardado correctamente en la ruta: ' . $rutaArchivo);
                } else {
                    // La solicitud no fue exitosa
                    Log::info( 'Hubo un error al descargar el archivo desde la URL: ' . $document->Number);
                }


*/

                // Manejar la respuesta de la API aquí
            } catch (\Exception $e) {
                Log::info('ERROR: ' . $e);
            }  


        } else {
            // El número de factura no es un entero
            Log::error('Error: El número de factura no es un entero.');
            // Puedes manejar el error de alguna manera, como retornar una respuesta de error
            return response()->json(['error' => 'El número de factura no es un entero.'], 400);
        }



        //llamar a las descargas
        $this->downloads_file();


        return $this->index($request);

    }

    public function downloads_file(){
        Log::info('Vamos a llamar a todos.');
        $documents = Document::all();

        foreach ($documents as $document) {
            Log::info('Descargando PDF : '.  $document->Number);

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
                    $document->save();

                   $this-> copiarArchivoPorSFTP($rutaArchivo);
                    
                   
                    // El archivo se ha guardado correctamente
                    Log::info( 'El archivo se ha descargado y guardado correctamente en la ruta: ' . $rutaArchivo);
                } else {
                    // La solicitud no fue exitosa
                    Log::info( 'Hubo un error al descargar el archivo desde la URL: ' . $document->Number);
                }

            } catch (\Exception $e) {
                continue;
            }

    
        }

    }


    public function copiarArchivoPorSFTP(string  $archivo)
    {
        Log::info('Vamos a pasar por SFTP el archivo'. $archivo);
    
        Log::info('Vamos a resolver el valor');

        $host  = Mantenedor::where('tipo', 'SFTPHost')->value('valor');
        $user  = Mantenedor::where('tipo', 'SFTPUser')->value('valor');
        $port  = Mantenedor::where('tipo', 'SFTPPort')->value('valor');
        $password  = Mantenedor::where('tipo', 'SFTPPassword')->value('valor');
        
        Log::info('Host: '. $host .'User: '. $user .'Port: '.$port.' Password: '.$password);
       
        
        $rutaArchivoLocal = $archivo;
        $rutaArchivoRemoto = $archivo;
        Log::info('antes del try');
        try {   

        // Crear una instancia de SFTP
        $sftp = new SFTP($host, $port);
  
        // Autenticarse con usuario y contraseña
        if (!$sftp->login($user, $password)) {
            Log::error( 'USER O PASS FALLIDA PARA CONECTAR A SFTP');
        }
        
        // Copiar el archivo por SFTP
        if (!$sftp->put($rutaArchivoRemoto, $rutaArchivoLocal, SFTP::SOURCE_LOCAL_FILE)) {
            Log::error( 'Error al pasar el archivo'. $rutaArchivoRemoto);
        }

        // Cerrar la conexión SFTP
        $sftp->disconnect();

        Log::info( 'Copiado Exitosamente'. $rutaArchivoRemoto);

    } catch (\Exception $e) {
        Log::error( 'Ocurrio un error conectando'. $e->getMessage() );
    }
    }



}
