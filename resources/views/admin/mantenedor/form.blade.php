<x-tomato-admin-container :label="isset($model) ? __('Edit Mantenedor') . ' #' .$model->id : __('Create Mantenedor')">
       <x-splade-form :for="$form" />
</x-tomato-admin-container>
