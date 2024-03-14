<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['customBody'])
<x-splade-table-wrapper :customBody="$customBody" {{ $attributes }}>

{{ $slot ?? "" }}
</x-splade-table-wrapper>