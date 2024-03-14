<?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'button-with-dropdown'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dusk' => 'bulk-actions-exports-dropdown','v-bind:close-on-click' => 'true','class' => 'w-full bg-white border border-gray-200 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:hover:bg-gray-600  dark:bg-gray-700 dark:border-gray-600']); ?>
     <?php $__env->slot('button', null, []); ?> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
        </svg>
     <?php $__env->endSlot(); ?>

    <div class="min-w-max bg-white dark:bg-gray-700  overflow-hidden">
        <div class="flex flex-col">

            <?php if($table->hasExports()): ?>
                <h3 class="text-xs uppercase tracking-wide bg-gray-100 dark:bg-gray-800 px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                    <?php echo e(__('Export results')); ?>

                </h3>
            <?php endif; ?>

            <?php $__currentLoopData = $table->getExports(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $export): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a
                    download
                    class="text-left w-full px-4 py-2 text-sm text-gray-700 dark:text-white dark:hover:bg-gray-600 hover:bg-gray-50 hover:text-gray-900 font-normal"
                    href="<?php echo e($export->getUrl()); ?>"
                    dusk="action.<?php echo e($export->getSlug()); ?>">
                    <?php echo e($export->label); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(isset($actions)): ?>
                <h3 class="text-xs uppercase tracking-wide bg-gray-100 dark:bg-gray-800 px-4 py-2 border-b border-gray-200 dark:border-gray-600">
                    <?php echo e(__('Actions')); ?>

                </h3>
                <?php echo $actions; ?>

            <?php endif; ?>

        </div>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/bulk-actions-exports.blade.php ENDPATH**/ ?>