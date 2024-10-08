<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['appear','show']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['appear','show']); ?>
<?php foreach (array_filter((['appear','show']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginal9c1b3bcdbb92880d08ba057cf26c9bd2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9c1b3bcdbb92880d08ba057cf26c9bd2 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Transition::resolve(['appear' => $appear,'show' => $show] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-transition'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Transition::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>

<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9c1b3bcdbb92880d08ba057cf26c9bd2)): ?>
<?php $attributes = $__attributesOriginal9c1b3bcdbb92880d08ba057cf26c9bd2; ?>
<?php unset($__attributesOriginal9c1b3bcdbb92880d08ba057cf26c9bd2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9c1b3bcdbb92880d08ba057cf26c9bd2)): ?>
<?php $component = $__componentOriginal9c1b3bcdbb92880d08ba057cf26c9bd2; ?>
<?php unset($__componentOriginal9c1b3bcdbb92880d08ba057cf26c9bd2); ?>
<?php endif; ?><?php /**PATH /Users/lramirez/laravel/admindoc/storage/framework/views/0c32457c659c0ab553b2b2e2e14a70a8.blade.php ENDPATH**/ ?>