<thead class="bg-gray-50 dark:bg-gray-700">
    <tr>
        <?php if($hasBulkActions = $table->hasBulkActions()): ?>
            <th width="64" class="text-xs px-6 py-4 border-b border-gray-200 dark:border-gray-500">
                <?php echo $__env->make('splade::table.select-rows-dropdown', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </th>
        <?php endif; ?>

        <?php $__currentLoopData = $table->columns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <th
                v-show="table.columnIsVisible(<?php echo \Illuminate\Support\Js::from($column->key)->toHtml() ?>)"
                class="md:last:sticky last:before:hidden md:last:before:block md:last:before:h-full md:last:before:top-0 md:ltr:last:before:left-[-15px] md:rtl:last:before:right-[-15px] md:last:before:absolute md:last:before:w-[15px] md:ltr:last:before:shadow-[inset_-15px_0_15px_-17px_rgba(0,0,0,0.2)] md:rtl:last:before:shadow-[inset_15px_0_15px_-17px_rgba(0,0,0,0.2)] rtl:last:border-r ltr:last:border-l border-b border-gray-200 dark:border-gray-500 ltr:last:right-0 rtl:last:left-0 last:bg-gray-50 last:dark:bg-gray-700 <?php if($loop->first && $hasBulkActions): ?> pr-6 <?php else: ?> px-6 <?php endif; ?> py-3 text-left rtl:text-right text-xs font-medium tracking-wide text-gray-500 dark:text-white <?php echo e($column->classes); ?>"
            >
                <?php if($column->sortable): ?>
                    <Link keep-modal dusk="sort-<?php echo e($column->key); ?>" href="<?php echo e($sortBy($column)); ?>">
                <?php endif; ?>

                <span class="flex flex-row items-center">
                    <span class="uppercase w-full"><?php echo e($column->label); ?></span>

                    <?php if($column->sortable): ?>
                        <svg aria-hidden="true" class="w-3 h-3 ml-2 <?php if($column->sorted): ?> text-green-500 <?php else: ?> text-gray-400 <?php endif; ?>" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                            <?php if(!$column->sorted): ?>
                                <path fill="currentColor" d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z" />
                            <?php elseif($column->sorted === 'asc'): ?>
                                <path fill="currentColor" d="M279 224H41c-21.4 0-32.1-25.9-17-41L143 64c9.4-9.4 24.6-9.4 33.9 0l119 119c15.2 15.1 4.5 41-16.9 41z" />
                            <?php elseif($column->sorted === 'desc'): ?>
                                <path fill="currentColor" d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41z" />
                            <?php endif; ?>
                        </svg>
                    <?php endif; ?>
                </span>

                <?php if($column->sortable): ?>
                    </Link>
                <?php endif; ?>
            </th>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tr>
</thead>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/head.blade.php ENDPATH**/ ?>