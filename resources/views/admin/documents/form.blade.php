<x-tomato-admin-container :label="isset($model) ? __('Edit Document') . ' #' .$model->id : __('Create Document')">
       <x-splade-form :for="$form" />
</x-tomato-admin-container>
