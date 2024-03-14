<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['name','label','value'])
<x-splade-radio :name="$name" :label="$label" :value="$value" {{ $attributes }}>

{{ $slot ?? "" }}
</x-splade-radio>