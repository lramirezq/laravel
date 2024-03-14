<tbody class="divide-y divide-gray-100 dark:divide-gray-600 bg-white dark:bg-gray-800">
    <?php $__empty_1 = true; $__currentLoopData = $table->resource; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemKey => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr
            :class="{
                'bg-gray-50 dark:bg-gray-700 ': table.striped && <?php echo \Illuminate\Support\Js::from($itemKey)->toHtml() ?> % 2,
                'hover:bg-gray-100 dark:hover:bg-gray-800': table.striped,
                'hover:bg-gray-50 dark:hover:bg-gray-900 ': !table.striped
            }"
        >
            <?php if($hasBulkActions = $table->hasBulkActions()): ?>
                <?php $itemPrimaryKey = $table->findPrimaryKey($item) ?>
                <td width="64" class="text-xs px-6 py-4 border-b border-gray-200 dark:border-gray-500" :class="{'bg-gray-200 dark:bg-gray-600': table.itemIsSelected(<?php echo \Illuminate\Support\Js::from($itemPrimaryKey)->toHtml() ?>)}">
                    <div class="h-full">
                        <input
                            @change="(e) => table.setSelectedItem(<?php echo \Illuminate\Support\Js::from($itemPrimaryKey)->toHtml() ?>, e.target.checked)"
                            :checked="table.itemIsSelected(<?php echo \Illuminate\Support\Js::from($itemPrimaryKey)->toHtml() ?>)"
                            :disabled="table.allItemsFromAllPagesAreSelected"
                            class="dark:bg-gray-500 border-gray-200 dark:border-gray-600 rounded text-primary-600 shadow-sm focus:border-primary-300 focus:ring focus:ring-primary-200 focus:ring-opacity-50 disabled:opacity-50"
                            name="table-row-bulk-action"
                            type="checkbox"
                            value="<?php echo e($itemPrimaryKey); ?>"
                        />
                    </div>
                </td>
            <?php endif; ?>

            <?php $__currentLoopData = $table->columns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($column->key === 'actions'): ?>
                    <td
                        <?php if($table->rowLinks->has($itemKey)): ?>
                            @click="(event) => table.visit(<?php echo \Illuminate\Support\Js::from($table->rowLinks->get($itemKey))->toHtml() ?>, <?php echo \Illuminate\Support\Js::from($table->rowLinkType)->toHtml() ?>, event)"
                        <?php endif; ?>
                        v-show="table.columnIsVisible(<?php echo \Illuminate\Support\Js::from($column->key)->toHtml() ?>)"
                        :class="{
                            'bg-gray-200 dark:bg-gray-600': table.itemIsSelected(<?php echo \Illuminate\Support\Js::from($itemPrimaryKey??null)->toHtml() ?>)}
                        "
                        class="table_action md:sticky w-0 last:before:hidden md:last:before:block md:last:before:h-full md:last:before:top-0 md:ltr:last:before:left-[-15px] md:rtl:last:before:right-[-15px] md:last:before:absolute md:last:before:w-[15px] md:ltr:last:before:shadow-[inset_-15px_0_15px_-17px_rgba(0,0,0,0.2)] md:rtl:last:before:shadow-[inset_15px_0_15px_-17px_rgba(0,0,0,0.2)] rtl:border-r border-l border-b border-gray-200 dark:border-gray-500 rtl:left-0 ltr:right-0 bg-white dark:bg-gray-800 table_action_hover whitespace-nowrap ltr:capitalize text-sm <?php if($loop->first && $hasBulkActions): ?> pr-6 <?php else: ?> px-6 <?php endif; ?> py-4 <?php if($column->highlight): ?> text-gray-900 dark:text-white font-medium text-left rtl:text-right <?php else: ?> text-gray-500 dark:text-gray-200 <?php endif; ?> <?php if($table->rowLinks->has($itemKey)): ?> cursor-pointer <?php endif; ?> <?php echo e($column->classes); ?>"
                    >
                        <?php if(isset(${'spladeTableCell' . $column->keyHash()})): ?>
                            <?php echo e(${'spladeTableCell' . $column->keyHash()}($item, $itemKey)); ?>

                        <?php else: ?>
                            <?php echo nl2br(e($getColumnDataFromItem($item, $column))); ?>

                        <?php endif; ?>
                    </td>
                <?php else: ?>
                    <td
                        <?php if($table->rowLinks->has($itemKey)): ?>
                            @click="(event) => table.visit(<?php echo \Illuminate\Support\Js::from($table->rowLinks->get($itemKey))->toHtml() ?>, <?php echo \Illuminate\Support\Js::from($table->rowLinkType)->toHtml() ?>, event)"
                        <?php endif; ?>
                        v-show="table.columnIsVisible(<?php echo \Illuminate\Support\Js::from($column->key)->toHtml() ?>)"
                        :class="{'bg-gray-200 dark:bg-gray-600': table.itemIsSelected(<?php echo \Illuminate\Support\Js::from($itemPrimaryKey??null)->toHtml() ?>)}"
                        class="border-b border-gray-200 dark:border-gray-500 table_action_hover whitespace-nowrap ltr:capitalize text-sm   <?php if($loop->first && $hasBulkActions): ?> pr-6 <?php else: ?> px-6 <?php endif; ?> py-4 <?php if($column->highlight): ?> text-gray-900 dark:text-white font-medium text-left rtl:text-right <?php else: ?> text-gray-500 dark:text-gray-200 <?php endif; ?> <?php if($table->rowLinks->has($itemKey)): ?> cursor-pointer <?php endif; ?> <?php echo e($column->classes); ?>"
                    >
                        <?php if(isset(${'spladeTableCell' . $column->keyHash()})): ?>
                            <?php echo e(${'spladeTableCell' . $column->keyHash()}($item, $itemKey)); ?>

                        <?php else: ?>
                            <?php echo nl2br(e($getColumnDataFromItem($item, $column))); ?>

                        <?php endif; ?>
                    </td>
                <?php endif; ?>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr>
            <td colspan="<?php echo e($table->columns()->count()); ?>" class="whitespace-nowrap">
                <?php if(isset($emptyState) && !!$emptyState): ?>
                    <?php echo e($emptyState); ?>

                <?php else: ?>
                    <div class="py-12">
                        <div class="flex flex-col justify-center items-center my-2 text-danger-500">
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-x-circle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 h-16']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                        </div>
                        <p class="text-gray-700 dark:text-gray-200 px-6  font-medium text-sm text-center">
                            <?php echo e(__('There are no items to show.')); ?>

                        </p>
                    </div>
                <?php endif; ?>
            </td>
        </tr>
    <?php endif; ?>
</tbody>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/body.blade.php ENDPATH**/ ?>