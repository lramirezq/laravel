<?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'dropdown'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dusk' => 'select-rows-dropdown','close-on-click' => true]); ?>
     <?php $__env->slot('trigger', null, []); ?> 
        <input
            type="checkbox"
            class="rounded dark:bg-gray-500 dark:border-gray-600 border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50"
            :checked="table.allVisibleItemsAreSelected"
        />
     <?php $__env->endSlot(); ?>

    <div class="mt-2 min-w-max rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5">
        <div class="flex flex-col">
            <button
                class="text-left w-full px-4 py-2 text-sm text-gray-700 dark:text-white dark:hover:bg-gray-600 hover:bg-gray-100 hover:text-gray-900 font-normal"
                @click="table.setSelectedItems(<?php echo \Illuminate\Support\Js::from($table->getPrimaryKeys())->toHtml() ?>)"
                dusk="select-all-on-this-page">
                <?php echo e(__('Select all on this page')); ?> (<?php echo e($table->totalOnThisPage()); ?>)
            </button>

            <?php if($showPaginator()): ?>
                <button
                    class="text-left w-full px-4 py-2 text-sm text-gray-700 dark:text-white dark:hover:bg-gray-600 hover:bg-gray-100 hover:text-gray-900 font-normal"
                    @click="table.setSelectedItems(['*'])"
                    dusk="select-all-results">
                    <?php echo e(__('Select all results')); ?> (<?php echo e($table->totalOnAllPages()); ?>)
                </button>
            <?php endif; ?>

            <button
                v-if="table.hasSelectedItems"
                class="text-left w-full px-4 py-2 text-sm text-gray-700 dark:text-white dark:hover:bg-gray-600 hover:bg-gray-100 hover:text-gray-900 font-normal"
                @click="table.setSelectedItems([])"
                dusk="select-none">
                <?php echo e(__('Clear selection')); ?>

            </button>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/select-rows-dropdown.blade.php ENDPATH**/ ?>