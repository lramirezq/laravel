<?php

namespace App\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Database\Eloquent\Builder;

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
                columns: ['id','Number',]
            )
            
            ->defaultSort('id', 'desc')
 
            ->column(
                key: 'Date',
                label: __('FECHA'),
                sortable: true
            )
            ->column(
                key: 'Number',
                label: __('Numero'),
                sortable: true
            )
 
            ->column(
                key: 'DocumentReceiverCode',
                label: __('RUT'),
                sortable: true
            )
            ->column(
                key: 'DocumentReceiverName',
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
                sortable: true
            )
            ->column(
                key: 'FreeAmount',
                label: __('FreeAmount'),
                sortable: true
            )
            ->column(
                key: 'TaxAmount',
                label: __('TaxAmount'),
                sortable: true
            )
            ->column(
                key: 'TotalAmount',
                label: __('TotalAmount'),
                sortable: true
            )
            ->column(
                key: 'CurrencyType',
                label: __('CurrencyType'),
                sortable: true
            )
 
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->export()
            ->paginate(100);
    }
}
