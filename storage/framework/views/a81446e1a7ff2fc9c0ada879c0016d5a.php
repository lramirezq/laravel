<?php if (isset($component)) { $__componentOriginal35c255806037bacb49330646f09778af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35c255806037bacb49330646f09778af = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo e($label); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('buttons', null, []); ?> 
        <?php echo e($buttons ?? ''); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('icon', null, []); ?> 
        <?php echo e($icon ?? ''); ?>

     <?php $__env->endSlot(); ?>
    <div class="bg-white border-gray-200 dark:bg-gray-800 p-6 rounded-xl border dark:border-gray-700 mb-6">
        <?php if (isset($component)) { $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Modal::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Modal::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'font-main']); ?>
             <?php $__env->slot('title', null, []); ?> 
                <?php echo e($label); ?>

             <?php $__env->endSlot(); ?>

            <div class="pt-3">
                <?php echo e($slot); ?>

            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721)): ?>
<?php $attributes = $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721; ?>
<?php unset($__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721)): ?>
<?php $component = $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721; ?>
<?php unset($__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721); ?>
<?php endif; ?>
    </div>

    <?php if(isset($body)): ?>
        <?php echo e($body); ?>

    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35c255806037bacb49330646f09778af)): ?>
<?php $attributes = $__attributesOriginal35c255806037bacb49330646f09778af; ?>
<?php unset($__attributesOriginal35c255806037bacb49330646f09778af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35c255806037bacb49330646f09778af)): ?>
<?php $component = $__componentOriginal35c255806037bacb49330646f09778af; ?>
<?php unset($__componentOriginal35c255806037bacb49330646f09778af); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/container.blade.php ENDPATH**/ ?>