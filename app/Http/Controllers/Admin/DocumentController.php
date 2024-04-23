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
use App\Models\Evento;
use Illuminate\Support\Facades\DB;


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
       
        /*
        $documents = DB::table("Documents")->get();
        foreach ($documents as $document) {
            $fecha = $document->Date;
            Log::info(substr($fecha, 0, 10));
            $document->Date = substr($fecha, 0, 10);
        }
*/

        return Tomato::index(
            request: $request,
            model: $this->model,
            //model: $documents,
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
        Log::info('Vamos a pasar por SFTP el archivo: '. $archivo);
    
       

        $host  = Mantenedor::where('tipo', 'SFTPHost')->value('valor');
        $user  = Mantenedor::where('tipo', 'SFTPUser')->value('valor');
        $port  = Mantenedor::where('tipo', 'SFTPPort')->value('valor');
        $password  = Mantenedor::where('tipo', 'SFTPPassword')->value('valor');
        
       // Log::info('Host: '. $host .'User: '. $user .'Port: '.$port.' Password: '.$password);
       
        Log::info("esto llego: ".$archivo);
        $rutaArchivoLocal = storage_path("app/{$archivo}");
        Log::info("este es el path completo: ".$rutaArchivoLocal);
        $rutaArchivoRemoto = '/files/' . basename($archivo);


        Log::info('archivo remoto: '.$rutaArchivoRemoto);
        

        if (!file_exists($rutaArchivoLocal)) {
            Log::error('El archivo local no existe en la ruta especificada: ' . $rutaArchivoLocal);
            // Manejo del error aquí
        }

        

        try {   

        // Crear una instancia de SFTP
        $sftp = new SFTP($host, $port);
  
        // Autenticarse con usuario y contraseña
        if (!$sftp->login($user, $password)) {
            Log::error( 'USER O PASS FALLIDA PARA CONECTAR A SFTP');
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

        Log::info( 'Copiado Exitosamente'. $rutaArchivoRemoto);

    } catch (\Exception $e) {
        Log::error( 'Ocurrio un error conectando'. $e->getMessage() );
    }
    }



}
