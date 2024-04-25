<x-tomato-admin-layout>
    <x-slot:header>
        {{ __('Documentos Recibidos') }}
    </x-slot:header>
   
    <x-tomato-admin-widget 
   :title="__('Total Documentos')" 
   icon="bx bx-file-find" 
   :counter="\App\Models\Document::query()->count()"
    />
    
   

    <div class="pb-12">
        <div class="mx-auto">
            <x-splade-table :for="$table" striped>
                <x-splade-cell DocumentTypeId>
    <x-tomato-admin-row table type="number" :value="$item->DocumentTypeId" />
</x-splade-cell>





                <x-splade-cell actions>
                    <div class="flex justify-start">
                        <x-tomato-admin-button success type="icon" title="{{trans('tomato-admin::global.crud.view')}}" modal :href="route('admin.documents.show', $item->id)">
                            <x-heroicon-s-eye class="h-6 w-6"/>
                        </x-tomato-admin-button>
  


                    </div>
                </x-splade-cell>
            </x-splade-table>
        </div>
    </div>
</x-tomato-admin-layout>
