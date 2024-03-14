<select
    name="per_page"
    class="block dark:bg-gray-700 dark:border-gray-600 focus:ring-indigo-500 focus:border-indigo-500 min-w-max shadow-sm text-sm border-gray-300 rounded-md"
    @change="table.updateQuery('perPage', $event.target.value)"
  >
    <?php $__currentLoopData = $table->allPerPageOptions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $perPage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($perPage); ?>" <?php if($perPage === $table->perPage()): echo 'selected'; endif; ?>>
            <?php echo e($perPage); ?> <?php echo e(__('per page')); ?>

        </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/per-page-selector.blade.php ENDPATH**/ ?>