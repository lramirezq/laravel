<footer class="bg-white dark:bg-gray-800 dark:border-gray-700 p-4 border-t border-gray-200 flex flex-col  items-center justify-center">
    <?php if(count(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getFooter())): ?>

    <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getFooter(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>

    <div>
 
        <span class="text-sm">
            Creado By Luis Ramirez Queupul
        </span>
    </div>
    <div class="ml-4 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
        Laravel v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)
    </div>

    <?php endif; ?>
</footer>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/layouts/includes/footer.blade.php ENDPATH**/ ?>