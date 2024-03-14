<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['name','inline','help'])
<x-splade-group :name="$name" :inline="$inline" :help="$help" {{ $attributes }}>
<x-slot name="label" >{{ $label }}</x-slot>
{{ $slot ?? "" }}
</x-splade-group>