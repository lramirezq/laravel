<?php if (isset($component)) { $__componentOriginal00ce306671dddf92a9de0a354be76ef1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00ce306671dddf92a9de0a354be76ef1 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Container::resolve(['label' => isset($model) ? __('Edit Mantenedor') . ' #' .$model->id : __('Create Mantenedor')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Container::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
       <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['for' => $form] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $attributes = $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $component = $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00ce306671dddf92a9de0a354be76ef1)): ?>
<?php $attributes = $__attributesOriginal00ce306671dddf92a9de0a354be76ef1; ?>
<?php unset($__attributesOriginal00ce306671dddf92a9de0a354be76ef1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00ce306671dddf92a9de0a354be76ef1)): ?>
<?php $component = $__componentOriginal00ce306671dddf92a9de0a354be76ef1; ?>
<?php unset($__componentOriginal00ce306671dddf92a9de0a354be76ef1); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/resources/views/admin/mantenedor/form.blade.php ENDPATH**/ ?>