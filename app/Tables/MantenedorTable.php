<?php

namespace App\Tables;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\AbstractTable;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Database\Eloquent\Builder;

class MantenedorTable extends AbstractTable
{
    /**
     * Create a new instance.
     *
     * @return void
     */
    public function __construct(public $query=null)
    {
        if(!$query){
            $this->query = \App\Models\Mantenedor::query();
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
                columns: ['id',]
            )
            ->bulkAction(
                label: trans('tomato-admin::global.crud.delete'),
                each: fn (\App\Models\Mantenedor $model) => $model->delete(),
                after: fn () => Toast::danger(__('Mantenedor Has Been Deleted'))->autoDismiss(2),
                confirm: true
            )
            ->defaultSort('id', 'desc')
            ->column(
                key: 'id',
                label: __('Id'),
                sortable: true
            )
            ->column(
                key: 'tipo',
                label: __('Tipo'),
                sortable: true
            )
            ->column(
                key: 'valor',
                label: __('Valor'),
                sortable: true
            )
            ->column(
                key: 'misc',
                label: __('Misc'),
                sortable: true
            )
            ->column(key: 'actions',label: trans('tomato-admin::global.crud.actions'))
            ->export()
            ->paginate(10);
    }
}
