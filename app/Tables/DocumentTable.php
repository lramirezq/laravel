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
            ->bulkAction(
                label: trans('tomato-admin::global.crud.delete'),
                each: fn (\App\Models\Document $model) => $model->delete(),
                after: fn () => Toast::danger(__('Document Has Been Deleted'))->autoDismiss(2),
                confirm: true
            )
            ->defaultSort('id', 'desc')
            // ->column(
            //     key: 'id',
            //     label: __('Id'),
            //     sortable: true
            // )
         //   ->column(
         //       key: 'UrlPdf',
         //       label: __('UrlPdf'),
         //       sortable: true
                
         //   )
        //    ->column(
        //        key: 'UrlXml',
        //        label: __('UrlXml'),
        //        sortable: true
        //    )
            // ->column(
            //     key: 'UrlJson',
            //     label: __('UrlJson'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'BarCodeText',
            //     label: __('BarCodeText'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'GlobalDocumentId',
            //     label: __('GlobalDocumentId'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'CountryDocumentId',
            //     label: __('CountryDocumentId'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'ExternalId',
            //     label: __('ExternalId'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'CountryId',
            //     label: __('CountryId'),
            //     sortable: true
            // )
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
            // ->column(
            //     key: 'DocumentTypeId',
            //     label: __('DocumentTypeId'),
            //     sortable: true
            // )
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
            // ->column(
            //     key: 'SeriesNumber',
            //     label: __('SeriesNumber'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'Series',
            //     label: __('Series'),
            //     sortable: true
            // )
        
            // ->column(
            //     key: 'NumberStr',
            //     label: __('NumberStr'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'DocumentSenderCode',
            //     label: __('DocumentSenderCode'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'DocumentSenderName',
            //     label: __('DocumentSenderName'),
            //     sortable: true
            // )
         
            // ->column(
            //     key: 'DocumentFinancialOwnerCode',
            //     label: __('DocumentFinancialOwnerCode'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'DocumentFinancialOwnerName',
            //     label: __('DocumentFinancialOwnerName'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'FinancialDate',
            //     label: __('FinancialDate'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'EstimatedPaymentDate',
            //     label: __('EstimatedPaymentDate'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'DocumentTimeStamp',
            //     label: __('DocumentTimeStamp'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'AuthorityTimeStamp',
            //     label: __('AuthorityTimeStamp'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'SyncPoint',
            //     label: __('SyncPoint'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'DocumentTags',
            //     label: __('DocumentTags'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'TwoCheck',
            //     label: __('TwoCheck'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'Notes',
            //     label: __('Notes'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'Offers',
            //     label: __('Offers'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'Fields',
            //     label: __('Fields'),
            //     sortable: true
            // )
            // ->column(
            //     key: 'Author',
            //     label: __('Author'),
            //     sortable: true
            // )
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->export()
            ->paginate(10);
    }
}
