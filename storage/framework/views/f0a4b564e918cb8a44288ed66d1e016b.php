<?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'group'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'inline' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($inline),'help' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($help),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes)]); ?>
     <?php $__env->slot('label', null, []); ?> <?php echo e($label); ?> <?php $__env->endSlot(); ?>

    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'radio'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value)]); ?>
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
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/form/radios.blade.php ENDPATH**/ ?>