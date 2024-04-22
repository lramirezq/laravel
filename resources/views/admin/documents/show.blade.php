<x-tomato-admin-container label="{{trans('tomato-admin::global.crud.view')}} {{__('Document')}} #{{$model->id}}">
     <!-- Listado de eventos -->


   


     <h2>{{ __('Eventos') }}</h2>

            <div>
               <table>
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

    <hr/>
    <hr/>

@if (!is_null($model->path_xml) && Storage::exists($model->path_xml))
    <a href="{{ route('mostrar-files', ['nombreArchivo' => basename($model->path_xml)]) }}" target="_blank"><i class="bx bxs-file"></i></a>
@else
    <span>Archivo XML no disponible</span>
@endif


@if (!is_null($model->path_pdf) && Storage::exists($model->path_pdf))
    <a href="{{ route('mostrar-files', ['nombreArchivo' => basename($model->path_pdf)]) }}" target="_blank"><i class="bx bxs-file-pdf"></i></a>
@else
    <span>Archivo PDF no disponible</span>
@endif


</x-tomato-admin-container>
