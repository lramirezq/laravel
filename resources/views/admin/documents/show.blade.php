<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.view')}} {{__('Document')}} #{{$model->id}}">
     <!-- Listado de eventos -->
     <h2>{{ __('Eventos') }}</h2>

            <div>
               <table border='1'>
                <tr>
                    <td>FECHA</td>
                    <td>EVENTO</td>
                </tr>
                
                @foreach ($model->eventos as $evento)
                <tr>
                    <td>{{ $evento->fecha_evento }} </td>
                    <td> {{ $evento->observacion }}</td>
                </tr>   
                @endforeach
                
                </table>
            </div>

    <tr/>


    @if (!is_null($model->path_xml) && Storage::exists($model->path_xml))
    <a href="{{ route('mostrar-files', ['nombreArchivo' => basename($model->path_xml)]) }}" target="_blank">Mostrar XML</a>
@else
    <span>Archivo XML no disponible</span>
@endif


@if (!is_null($model->path_pdf) && Storage::exists($model->path_pdf))
    <a href="{{ route('mostrar-files', ['nombreArchivo' => basename($model->path_pdf)]) }}" target="_blank">Mostrar PDF</a>
@else
    <span>Archivo PDF no disponible</span>
@endif




   




    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        

     <!-- Listado de eventos -->
     <h2>{{ __('Eventos') }}</h2>

            <div>
               <table>
                <tr>
                    <td>Evento</td>
                    <td>Fecha</td>
                </tr>
                
                @foreach ($model->eventos as $evento)
                <tr>
                    <td>{{ $evento->fecha_evento }} </td>
                    <td> {{ $evento->observacion }}</td>
                </tr>   
                @endforeach
                
                </table>
            </div>


          <x-tomato-admin-row :label="__('UrlJson')" :value="$model->UrlJson" type="string" />

          <x-tomato-admin-row :label="__('BarCodeText')" :value="$model->BarCodeText" type="string" />

          <x-tomato-admin-row :label="__('GlobalDocumentId')" :value="$model->GlobalDocumentId" type="string" />

          <x-tomato-admin-row :label="__('CountryDocumentId')" :value="$model->CountryDocumentId" type="string" />

          <x-tomato-admin-row :label="__('ExternalId')" :value="$model->ExternalId" type="string" />

          <x-tomato-admin-row :label="__('CountryId')" :value="$model->CountryId" type="string" />

          <x-tomato-admin-row :label="__('Date')" :value="$model->Date" type="string" />

          <x-tomato-admin-row :label="__('DocumentTypeId')" :value="$model->DocumentTypeId" type="number" />

          <x-tomato-admin-row :label="__('DocumentTypeName')" :value="$model->DocumentTypeName" type="string" />

          <x-tomato-admin-row :label="__('NetAmount')" :value="$model->NetAmount" type="number" />

          <x-tomato-admin-row :label="__('FreeAmount')" :value="$model->FreeAmount" type="number" />

          <x-tomato-admin-row :label="__('TaxAmount')" :value="$model->TaxAmount" type="number" />

          <x-tomato-admin-row :label="__('TotalAmount')" :value="$model->TotalAmount" type="number" />

          <x-tomato-admin-row :label="__('CurrencyType')" :value="$model->CurrencyType" type="string" />

          <x-tomato-admin-row :label="__('SeriesNumber')" :value="$model->SeriesNumber" type="string" />

          <x-tomato-admin-row :label="__('Series')" :value="$model->Series" type="string" />

          <x-tomato-admin-row :label="__('Number')" :value="$model->Number" type="number" />

          <x-tomato-admin-row :label="__('NumberStr')" :value="$model->NumberStr" type="string" />

          <x-tomato-admin-row :label="__('DocumentSenderCode')" :value="$model->DocumentSenderCode" type="string" />

          <x-tomato-admin-row :label="__('DocumentSenderName')" :value="$model->DocumentSenderName" type="string" />

          <x-tomato-admin-row :label="__('DocumentReceiverCode')" :value="$model->DocumentReceiverCode" type="string" />

          <x-tomato-admin-row :label="__('DocumentReceiverName')" :value="$model->DocumentReceiverName" type="string" />

          <x-tomato-admin-row :label="__('DocumentFinancialOwnerCode')" :value="$model->DocumentFinancialOwnerCode" type="string" />

          <x-tomato-admin-row :label="__('DocumentFinancialOwnerName')" :value="$model->DocumentFinancialOwnerName" type="string" />

          <x-tomato-admin-row :label="__('FinancialDate')" :value="$model->FinancialDate" type="string" />

          <x-tomato-admin-row :label="__('EstimatedPaymentDate')" :value="$model->EstimatedPaymentDate" type="string" />

          <x-tomato-admin-row :label="__('DocumentTimeStamp')" :value="$model->DocumentTimeStamp" type="string" />

          <x-tomato-admin-row :label="__('AuthorityTimeStamp')" :value="$model->AuthorityTimeStamp" type="string" />

          <x-tomato-admin-row :label="__('SyncPoint')" :value="$model->SyncPoint" type="string" />

          
          <x-tomato-admin-row :label="__('TwoCheck')" :value="$model->TwoCheck" type="string" />

          
          <x-tomato-admin-row :label="__('Offers')" :value="$model->Offers" type="string" />

          
          <x-tomato-admin-row :label="__('Author')" :value="$model->Author" type="string" />

         

    </div>
    <div class="flex justify-start gap-2 pt-3">
        <x-tomato-admin-button warning label="{{__('Edit')}}" :href="route('admin.documents.edit', $model->id)"/>
        <x-tomato-admin-button danger :href="route('admin.documents.destroy', $model->id)"
                               confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                               confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                               confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                               cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                               method="delete"  label="{{__('Delete')}}" />
        <x-tomato-admin-button secondary :href="route('admin.documents.index')" label="{{__('Cancel')}}"/>
    </div>
</x-tomato-admin-container>
