<?php if($type === 'button'): ?>
    <button <?php echo e($attributes->class([
            'text-gray-600 dark:text-gray-200 hover:text-black' => $black,
            'text-gray-600 dark:text-gray-200 hover:text-danger-500' => $danger,
            'text-gray-600 dark:text-gray-200 hover:text-warning-500' => $warning,
            'text-gray-600 dark:text-gray-200 hover:text-primary-500' => $primary,
            'text-gray-600 dark:text-gray-200 hover:text-success-500' => $success,
            'text-gray-600 dark:text-gray-200 hover:text-gray-500' => $secondary,
            'whitespace-nowrap block w-full px-4 py-2  text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out'
        ])); ?>>
        <div class="flex justify-start gap-2 ">
            <div class="flex flex-col items-center justify-center">
                <i class="<?php echo e($icon); ?> text-sm"></i>
            </div>
            <div class="text-sm ">
                <?php echo e($label); ?>

            </div>
        </div>
    </button>
<?php elseif($type === 'link'): ?>
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
            'text-gray-600 dark:text-gray-200 hover:text-black' => $black,
            'text-gray-600 dark:text-gray-200 hover:text-danger-500' => $danger,
            'text-gray-600 dark:text-gray-200 hover:text-warning-500' => $warning,
            'text-gray-600 dark:text-gray-200 hover:text-primary-500' => $primary,
            'text-gray-600 dark:text-gray-200 hover:text-success-500' => $success,
            'text-gray-600 dark:text-gray-200 hover:text-gray-500' => $secondary,
        ])),'class' => 'whitespace-nowrap block w-full px-4 py-2  text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out']); ?>
            <div class="flex justify-start gap-2">
                <div class="flex flex-col items-center justify-center">
                    <i class="<?php echo e($icon); ?> text-sm"></i>
                </div>
                <div>
                    <?php echo e($label); ?>

                </div>
            </div>
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
<?php elseif($type === 'copy'): ?>
        <?php if (isset($component)) { $__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Copy::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-copy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Copy::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes->class([
            'text-gray-600 dark:text-gray-200 hover:text-black' => $black,
            'text-gray-600 dark:text-gray-200 hover:text-danger-500' => $danger,
            'text-gray-600 dark:text-gray-200 hover:text-warning-500' => $warning,
            'text-gray-600 dark:text-gray-200 hover:text-primary-500' => $primary,
            'text-gray-600 dark:text-gray-200 hover:text-success-500' => $success,
            'text-gray-600 dark:text-gray-200 hover:text-gray-500' => $secondary,
        ])),'class' => 'whitespace-nowrap block w-full px-4 py-2  text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out']); ?>
            <div class="flex justify-start gap-2">
                <div class="flex flex-col items-center justify-center">
                    <i class="<?php echo e($icon); ?> text-sm"></i>
                </div>
                <div>
                    <?php echo e($label); ?>

                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b)): ?>
<?php $attributes = $__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b; ?>
<?php unset($__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b)): ?>
<?php $component = $__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b; ?>
<?php unset($__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/dropdown-item.blade.php ENDPATH**/ ?>