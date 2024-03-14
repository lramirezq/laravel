<TomatoTable <?php echo e($attributes->except('class')); ?>

    :striped="<?php echo \Illuminate\Support\Js::from($striped)->toHtml() ?>"
    :columns="<?php echo \Illuminate\Support\Js::from($table->columns())->toHtml() ?>"
    :search-debounce="<?php echo \Illuminate\Support\Js::from($searchDebounce)->toHtml() ?>"
    :default-visible-toggleable-columns="<?php echo \Illuminate\Support\Js::from($table->defaultVisibleToggleableColumns())->toHtml() ?>"
    :items-on-this-page="<?php echo \Illuminate\Support\Js::from($table->totalOnThisPage())->toHtml() ?>"
    :items-on-all-pages="<?php echo \Illuminate\Support\Js::from($table->totalOnAllPages())->toHtml() ?>"
    :base-url="<?php echo \Illuminate\Support\Js::from(request()->url())->toHtml() ?>"
>
    <template #default="<?php echo $scope; ?>">
        <div <?php echo e($attributes->only('class')); ?> :class="{ 'opacity-50': table.isLoading }">
            <?php if($hasControls()): ?>
                <?php echo $__env->make('splade::table.controls', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php $__currentLoopData = $table->searchInputs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchInput): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->renderUnless($searchInput->key === 'global', 'splade::table.search-row', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(isset($header)): ?>
                <?php echo e($header); ?>

            <?php endif; ?>

            <?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'table-wrapper'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['customBody' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customBody)]); ?>

            <?php if($customBody): ?>
                  <div v-if="table.hasSelectedItems" class="bg-gray-700 text-gray-100 dark:bg-gray-900 dark:text-gray-100  border border-gray-600 dark:border-gray-800 rounded-lg mb-3">
                        <div colspan="<?php echo e($table->columns()->count() + 1); ?>">
                            <div class="flex justify-start gap-4 p-4">
                                <div class="flex flex-col items-center justify-center font-medium">
                                    <h3 v-if="table.hasSelectedItems">
                                            <span v-if="table.totalSelectedItems == 1">
                                                <span v-text="table.totalSelectedItems" /> <?php echo e(__('Item selected')); ?>

                                            </span>

                                        <span v-if="table.totalSelectedItems > 1">
                                                <span v-text="table.totalSelectedItems" /> <?php echo e(__('Items selected')); ?>

                                            </span>
                                    </h3>
                                </div>

                                <div class="flex justify-start gap-2">
                                    <?php $__currentLoopData = $table->getBulkActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bulkAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($bulkAction->type === 'action'): ?>
                                            <div class="flex flex-col items-center justify-center">
                                                <button
                                                    type="button"
                                                    class="text-sm px-2 py-1 rounded-lg bg-<?php echo e($bulkAction->style); ?>-500 text-white"
                                                    @click.prevent="table.performBulkAction(
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->getUrl())->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->confirm)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->confirmText)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->confirmButton)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->cancelButton)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->cancelButton)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->requirePassword)->toHtml() ?>
                                                    )"
                                                    dusk="action.<?php echo e($bulkAction->getSlug()); ?>">
                                                    <?php echo e($bulkAction->label); ?>

                                                </button>
                                            </div>
                                        <?php elseif($bulkAction->type === 'modal'): ?>
                                            <div class="flex flex-col items-center justify-center">
                                                <Link
                                                    class="text-sm px-2 py-1 rounded-lg bg-<?php echo e($bulkAction->style); ?>-500 text-white"
                                                    modal
                                                    v-bind:href="'<?php echo e($bulkAction->href); ?>?ids='+table.selectedItems"
                                                    v-if="table.hasSelectedItems"
                                                    v-bind:confirm="<?php echo \Illuminate\Support\Js::from($bulkAction->confirm)->toHtml() ?>"
                                                    v-bind:confirmText="<?php echo \Illuminate\Support\Js::from($bulkAction->confirmText)->toHtml() ?>"
                                                    v-bind:confirmButton="<?php echo \Illuminate\Support\Js::from($bulkAction->confirmButton)->toHtml() ?>"
                                                    v-bind:cancelButton="<?php echo \Illuminate\Support\Js::from($bulkAction->cancelButton)->toHtml() ?>"
                                                    v-bind:requirePassword="<?php echo \Illuminate\Support\Js::from($bulkAction->requirePassword)->toHtml() ?>"
                                                    dusk="action.<?php echo e($bulkAction->getSlug()); ?>">
                                                    <?php echo e($bulkAction->label); ?>

                                                </Link>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                  <?php echo $__env->make($customBodyView, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php else: ?>
                    <table class="border-separate border-spacing-0 min-w-full divide-y divide-gray-200 dark:divide-gray-600 bg-white dark:bg-gray-700">
                        <?php if (! ($headless)): ?>
                            <?php if(isset($head)): ?>
                                <?php echo e($head); ?>

                            <?php elseif(count($table->resource)): ?>
                                <?php echo $__env->make('splade::table.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        <?php endif; ?>

                        <tr v-if="table.hasSelectedItems" class="bg-gray-700 dark:bg-gray-900 dark:bg-gray-200 text-gray-100">
                            <td colspan="<?php echo e($table->columns()->count() + 1); ?>">
                                <div class="flex justify-start gap-4 p-4">
                                    <div class="flex flex-col items-center justify-center font-medium">
                                        <h3 v-if="table.hasSelectedItems">
                                            <span v-if="table.totalSelectedItems == 1">
                                                <span v-text="table.totalSelectedItems" /> <?php echo e(__('Item selected')); ?>

                                            </span>

                                            <span v-if="table.totalSelectedItems > 1">
                                                <span v-text="table.totalSelectedItems" /> <?php echo e(__('Items selected')); ?>

                                            </span>
                                        </h3>
                                    </div>

                                    <div class="flex justify-start gap-2">
                                        <?php $__currentLoopData = $table->getBulkActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bulkAction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($bulkAction->type === 'action'): ?>
                                                <div class="flex flex-col items-center justify-center">
                                                    <button
                                                        type="button"
                                                        class="text-sm px-2 py-1 rounded-lg bg-<?php echo e($bulkAction->style); ?>-500 text-white"
                                                        @click.prevent="table.performBulkAction(
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->getUrl())->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->confirm)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->confirmText)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->confirmButton)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->cancelButton)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->cancelButton)->toHtml() ?>,
                                                        <?php echo \Illuminate\Support\Js::from($bulkAction->requirePassword)->toHtml() ?>
                                                    )"
                                                        dusk="action.<?php echo e($bulkAction->getSlug()); ?>">
                                                        <?php echo e($bulkAction->label); ?>

                                                    </button>
                                                </div>
                                            <?php elseif($bulkAction->type === 'modal'): ?>
                                                <div class="flex flex-col items-center justify-center">
                                                <Link
                                                    class="text-sm px-2 py-1 rounded-lg bg-<?php echo e($bulkAction->style); ?>-500 text-white"
                                                    modal
                                                    v-bind:href="'<?php echo e($bulkAction->href); ?>?ids='+table.selectedItems"
                                                    v-if="table.hasSelectedItems"
                                                    v-bind:confirm="<?php echo \Illuminate\Support\Js::from($bulkAction->confirm)->toHtml() ?>"
                                                    v-bind:confirmText="<?php echo \Illuminate\Support\Js::from($bulkAction->confirmText)->toHtml() ?>"
                                                    v-bind:confirmButton="<?php echo \Illuminate\Support\Js::from($bulkAction->confirmButton)->toHtml() ?>"
                                                    v-bind:cancelButton="<?php echo \Illuminate\Support\Js::from($bulkAction->cancelButton)->toHtml() ?>"
                                                    v-bind:requirePassword="<?php echo \Illuminate\Support\Js::from($bulkAction->requirePassword)->toHtml() ?>"
                                                    dusk="action.<?php echo e($bulkAction->getSlug()); ?>">
                                                    <?php echo e($bulkAction->label); ?>

                                                </Link>
                                                </div>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <?php if(isset($body)): ?>
                            <?php echo e($body); ?>

                        <?php else: ?>
                            <?php echo $__env->make('splade::table.body', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </table>
                <?php endif; ?>
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

            <?php if($showPaginator()): ?>
                <?php echo e($table->resource->links($paginationView, ['table' => $table, 'hasPerPageOptions' => $hasPerPageOptions()])); ?>

            <?php endif; ?>
        </div>
    </template>
</TomatoTable>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/table.blade.php ENDPATH**/ ?>