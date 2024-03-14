<?php if($type === 'link' && !isset($icon)): ?>
    <?php if (isset($component)) { $__componentOriginal9201898bb20e70f80043aa5944b64393 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9201898bb20e70f80043aa5944b64393 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class([
            'filament-button inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border',
            'focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4',
            'text-sm shadow-sm focus:ring-white filament-page-button-action',
            'bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700 text-white border-transparent' => $danger,
            'bg-warning-600 hover:bg-warning-500 focus:bg-warning-700 focus:ring-offset-warning-700 text-white border-transparent' => $warning,
            'bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 text-white border-transparent' => $primary,
            'bg-success-600 hover:bg-success-500 focus:bg-success-700 focus:ring-offset-success-700 text-white border-transparent' => $success,
            'bg-white hover:bg-gray-50 focus:bg-gray-100 focus:ring-offset-gray-95 text-gray-950 ring-gray-950/10 dark:bg-gray-800 dark:text-gray-200' => $secondary,
            'cursor-pointer transition-colors ease-in-out duration-20'
        ])),'method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($method)]); ?>
        <?php echo e($label ?: $slot); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9201898bb20e70f80043aa5944b64393)): ?>
<?php $attributes = $__attributesOriginal9201898bb20e70f80043aa5944b64393; ?>
<?php unset($__attributesOriginal9201898bb20e70f80043aa5944b64393); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9201898bb20e70f80043aa5944b64393)): ?>
<?php $component = $__componentOriginal9201898bb20e70f80043aa5944b64393; ?>
<?php unset($__componentOriginal9201898bb20e70f80043aa5944b64393); ?>
<?php endif; ?>
<?php elseif($type === 'icon' || isset($icon)): ?>
    <?php if (isset($component)) { $__componentOriginal9201898bb20e70f80043aa5944b64393 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9201898bb20e70f80043aa5944b64393 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class([
            'px-2 cursor-pointer transition-colors ease-in-out duration-20',
            'text-danger-500  hover:text-danger-400' => $danger,
            'text-warning-500 hover:text-warning-400' => $warning,
            'text-primary-500 hover:text-primary-400' => $primary,
            'text-success-500 hover:text-success-400' => $success
        ])),'title' => ''.e($label).'','method' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($method)]); ?>
        <?php if($label): ?>
            <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['text' => $label] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if(isset($icon)): ?>
                    <i class="<?php echo e($icon); ?> text-2xl"></i>
                <?php else: ?>
                    <?php echo e($label); ?>

                <?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256)): ?>
<?php $attributes = $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256; ?>
<?php unset($__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256)): ?>
<?php $component = $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256; ?>
<?php unset($__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256); ?>
<?php endif; ?>
        <?php else: ?>
            <?php echo e($slot); ?>

        <?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9201898bb20e70f80043aa5944b64393)): ?>
<?php $attributes = $__attributesOriginal9201898bb20e70f80043aa5944b64393; ?>
<?php unset($__attributesOriginal9201898bb20e70f80043aa5944b64393); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9201898bb20e70f80043aa5944b64393)): ?>
<?php $component = $__componentOriginal9201898bb20e70f80043aa5944b64393; ?>
<?php unset($__componentOriginal9201898bb20e70f80043aa5944b64393); ?>
<?php endif; ?>
<?php else: ?>
    <button  <?php echo e($attributes->class([
        'filament-button inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors',
        'focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4',
        'text-sm shadow-sm focus:ring-white filament-page-button-action',
        'bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700 text-white border-transparent' => $danger,
        'bg-warning-600 hover:bg-warning-500 focus:bg-warning-700 focus:ring-offset-warning-700 text-white border-transparent' => $warning,
        'bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 text-white border-transparent' => $primary,
        'bg-success-600 hover:bg-success-500 focus:bg-success-700 focus:ring-offset-success-700 text-white border-transparent' => $success,
        'bg-white hover:bg-gray-50 focus:bg-gray-100 focus:ring-offset-gray-95 text-gray-950 ring-gray-950/10 dark:bg-gray-800 dark:text-gray-200' => $secondary,
    ])); ?>>
        <?php echo e($label ?: $slot); ?>

    </button>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/button.blade.php ENDPATH**/ ?>