<?php

namespace App\Tables;

use Carbon\Carbon;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Log;
class DocumentTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(public $query=null)
    {
        if(!$query){
            $this->query = \App\Models\Document::query();
        }
    }

    /**
     * Determine if the user is authorized to perform bulk actions and exports.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {
        return true;
    }

    /**
     * The resource or query builder.
     *
     * @return mixed
     */
    public function for()
    {
        return $this->query;
    }

    /**
     * Configure the given SpladeTable.
     *
     * @param \ProtoneMedia\Splade\SpladeTable $table
     * @return void
     */
    public function configure(SpladeTable $table)
    {
        
     
        $table
           
            ->withGlobalSearch(
                label: trans('tomato-admin::global.search'),
                columns: ['id','Number','DocumentSenderCode','DocumentSenderName','GlobalDocumentId','DocumentTypeName']
            )
            ->selectFilter(
                key: 'Date',
                label: 'Date'
                )

            ->defaultSort('Date', 'asc')
              
          
            ->column(
                key: 'Date',
                label: __('FECHA'),
                sortable: true,
                as: function ($date) {
                    return Carbon::parse($date)->format('d/m/Y');
                }
            )
            ->column(
                key: 'Number',
                label: __('Folio'),
                sortable: true,
                as: function ($value) {
                    return number_format($value, 0, ',', '.');
                }
            )
 
            ->column(
                key: 'DocumentSenderCode',
                label: __('RUT'),
                sortable: true
            )
            ->column(
                key: 'DocumentSenderName',
                label: __('Razón Social'),
                sortable: true
            )
            ->column(
                key: 'DocumentTypeName',
                label: __('Tipo Documento'),
                sortable: true
            )
            ->column(
                key: 'NetAmount',
                label: __('NetAmount'),
                sortable: true,
                as: function ($value) {
                    return number_format($value, 0, ',', '.');
                }
            )
            ->column(
                key: 'TaxAmount',
                label: __('TaxAmount'),
                sortable: true,
                as: function ($value) {
                    return number_format($value, 0, ',', '.');
                }
            )
            ->column(
                key: 'TotalAmount',
                label: __('TotalAmount'),
                sortable: true,
                as: function ($value) {
                    return number_format($value, 0, ',', '.');
                }
            )
            
            ->column(
                key: 'GlobalDocumentId',
                label: __('GlobalDocumentId'),
                sortable: true
            )
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->export()
            ->paginate(100);
    }
}
