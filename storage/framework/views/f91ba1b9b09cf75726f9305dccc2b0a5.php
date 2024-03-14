<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name','label','value']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name','label','value']); ?>
<?php foreach (array_filter((['name','label','value']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalcc147188b70b131306b1d337ed413798 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcc147188b70b131306b1d337ed413798 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Radio::resolve(['name' => $name,'label' => $label,'value' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Radio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $attributes = $__attributesOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__attributesOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcc147188b70b131306b1d337ed413798)): ?>
<?php $component = $__componentOriginalcc147188b70b131306b1d337ed413798; ?>
<?php unset($__componentOriginalcc147188b70b131306b1d337ed413798); ?>
<?php endif; ?><?php /**PATH /Users/lramirez/laravel/admindoc/storage/framework/views/9c143f6616c1adfca4561bb6dbf66463.blade.php ENDPATH**/ ?>