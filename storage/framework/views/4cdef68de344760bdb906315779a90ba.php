<?php if (isset($component)) { $__componentOriginalce9c349ddaa9b55b02cbb8189788e282 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce9c349ddaa9b55b02cbb8189788e282 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Flash::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-flash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Flash::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div v-if="flash.has('status')" v-text="flash.status" <?php echo e($attributes->class('font-medium text-sm text-green-600')); ?> />
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce9c349ddaa9b55b02cbb8189788e282)): ?>
<?php $attributes = $__attributesOriginalce9c349ddaa9b55b02cbb8189788e282; ?>
<?php unset($__attributesOriginalce9c349ddaa9b55b02cbb8189788e282); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce9c349ddaa9b55b02cbb8189788e282)): ?>
<?php $component = $__componentOriginalce9c349ddaa9b55b02cbb8189788e282; ?>
<?php unset($__componentOriginalce9c349ddaa9b55b02cbb8189788e282); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/auth-session-status.blade.php ENDPATH**/ ?>