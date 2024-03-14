<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name','inline','help']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name','inline','help']); ?>
<?php foreach (array_filter((['name','inline','help']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<?php if (isset($component)) { $__componentOriginalf2931fc266eff6f4b8e92be72ba5930e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Group::resolve(['name' => $name,'inline' => $inline,'help' => $help] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
 <?php $__env->slot('label', null, []); ?> <?php echo e($label); ?> <?php $__env->endSlot(); ?>
<?php echo e($slot ?? ""); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e)): ?>
<?php $attributes = $__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e; ?>
<?php unset($__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2931fc266eff6f4b8e92be72ba5930e)): ?>
<?php $component = $__componentOriginalf2931fc266eff6f4b8e92be72ba5930e; ?>
<?php unset($__componentOriginalf2931fc266eff6f4b8e92be72ba5930e); ?>
<?php endif; ?><?php /**PATH /Users/lramirez/laravel/admindoc/storage/framework/views/683581f75a089f84774ed0325a44a114.blade.php ENDPATH**/ ?>