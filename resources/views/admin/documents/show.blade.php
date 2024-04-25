<x-tomato-admin-container label="">
    <table class="styled-table">
        <tr>
            <td>GlobalDocumentId</td>
            <td>{{ $model->GlobalDocumentId }}</td>
        </tr>
        <tr>
            <td>Tipo de Documento</td>
            <td>{{ $model->DocumentTypeName }}</td>
        </tr>
        <tr>
            <td>Folio</td>
            <td>{{ $model->Number }}</td>
        </tr>
    </table>
   
  
    <x-splade-table :for="$eventos" />

    <table class="styled-table">
    <tr>
        <td style="text-align: center;">Download PDF</td>
        <td style="text-align: center;">Download XML</td>
    </tr>
    <tr>
        <td style="text-align: center;">
            @if (!is_null($model->path_pdf) && Storage::exists($model->path_pdf))
                <a href="{{ route('mostrar-files', ['nombreArchivo' => basename($model->path_pdf)]) }}" target="_blank"><i class="bx bxs-file-pdf"></i></a>
            @else
                <span>Archivo PDF no disponible</span>
            @endif
        </td>
        <td style="text-align: center;">
            @if (!is_null($model->path_xml) && Storage::exists($model->path_xml))
                <a href="{{ route('mostrar-files', ['nombreArchivo' => basename($model->path_xml)]) }}" target="_blank"><i class="bx bxs-file"></i></a>
            @else
                <span>Archivo XML no disponible</span>
            @endif
        </td>
    </tr>
</table>


</x-tomato-admin-container>
