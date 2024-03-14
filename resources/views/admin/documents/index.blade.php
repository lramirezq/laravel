<x-tomato-admin-layout>
    <x-slot:header>
        {{ __('Document') }}
    </x-slot:header>
    <form action="{{ route('admin.documents.buscar') }}" method="POST">
    @csrf
    <button type="submit">Actualizar!!</button>
</form>
    <x-slot:buttons>
        <x-tomato-admin-button :modal="true" :href="route('admin.documents.create')" type="link">
            {{trans('tomato-admin::global.crud.create-new')}} {{__('Document')}}
        </x-tomato-admin-button>
    </x-slot:buttons>

    <div class="pb-12">
        <div class="mx-auto">
            <x-splade-table :for="$table" striped>
                <x-splade-cell DocumentTypeId>
    <x-tomato-admin-row table type="number" :value="$item->DocumentTypeId" />
</x-splade-cell>
<x-splade-cell NetAmount>
    <x-tomato-admin-row table type="number" :value="$item->NetAmount" />
</x-splade-cell>
<x-splade-cell FreeAmount>
    <x-tomato-admin-row table type="number" :value="$item->FreeAmount" />
</x-splade-cell>
<x-splade-cell TaxAmount>
    <x-tomato-admin-row table type="number" :value="$item->TaxAmount" />
</x-splade-cell>
<x-splade-cell TotalAmount>
    <x-tomato-admin-row table type="number" :value="$item->TotalAmount" />
</x-splade-cell>
<x-splade-cell Number>
    <x-tomato-admin-row table type="number" :value="$item->Number" />
</x-splade-cell>

                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <x-tomato-admin-button success type="icon" title="{{trans('tomato-admin::global.crud.view')}}" modal :href="route('admin.documents.show', $item->id)">
                            <x-heroicon-s-eye class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button warning type="icon" title="{{trans('tomato-admin::global.crud.edit')}}" modal :href="route('admin.documents.edit', $item->id)">
                            <x-heroicon-s-pencil class="h-6 w-6"/>
                        </x-tomato-admin-button>
                        <x-tomato-admin-button danger type="icon" title="{{trans('tomato-admin::global.crud.delete')}}" :href="route('admin.documents.destroy', $item->id)"
                           confirm="{{trans('tomato-admin::global.crud.delete-confirm')}}"
                           confirm-text="{{trans('tomato-admin::global.crud.delete-confirm-text')}}"
                           confirm-button="{{trans('tomato-admin::global.crud.delete-confirm-button')}}"
                           cancel-button="{{trans('tomato-admin::global.crud.delete-confirm-cancel-button')}}"
                           method="delete"
                        >
                            <x-heroicon-s-trash class="h-6 w-6"/>
                        </x-tomato-admin-button>
                    </div>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-tomato-admin-layout>
