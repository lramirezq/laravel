<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['customBody']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['customBody']); ?>
<?php foreach (array_filter((['customBody']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal199d197332268707894db5b362ea9e84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal199d197332268707894db5b362ea9e84 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\TableWrapper::resolve(['customBody' => $customBody] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-table-wrapper'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\TableWrapper::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal199d197332268707894db5b362ea9e84)): ?>
<?php $attributes = $__attributesOriginal199d197332268707894db5b362ea9e84; ?>
<?php unset($__attributesOriginal199d197332268707894db5b362ea9e84); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal199d197332268707894db5b362ea9e84)): ?>
<?php $component = $__componentOriginal199d197332268707894db5b362ea9e84; ?>
<?php unset($__componentOriginal199d197332268707894db5b362ea9e84); ?>
<?php endif; ?><?php /**PATH /Users/lramirez/laravel/admindoc/storage/framework/views/17ff3a8a38279f60135a9d2ae1960090.blade.php ENDPATH**/ ?>