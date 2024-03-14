<?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'dropdown'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <?php echo e($button); ?>

     <?php $__env->endSlot(); ?>

    <div class="mt-2 min-w-max rounded-lg border border-gray-200 dark:border-gray-700 dark:bg-gray-800 shadow-lg bg-white ring-1 ring-black ring-opacity-5" >
        <?php echo e($slot); ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $attributes = $__attributesOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__attributesOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $component = $__componentOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__componentOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/components/button-with-dropdown.blade.php ENDPATH**/ ?>