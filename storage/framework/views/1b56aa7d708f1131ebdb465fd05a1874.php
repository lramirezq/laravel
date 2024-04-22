<div class="flex items-center justify-center min-h-screen py-12 text-gray-900 bg-gray-100 filament-login-page dark:bg-gray-900 dark:text-white">
    <div class="w-screen max-w-md px-6 -mt-16 space-y-8 md:mt-0 md:px-2">
        <div class="relative p-8 space-y-4 border border-gray-200 shadow-2xl bg-white/50 backdrop-blur-xl rounded-2xl dark:bg-gray-900/50 dark:border-gray-700">
            <div class="flex justify-center w-full">
                <?php if(count(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLogoSection())): ?>
                    <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLogoSection(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php else: ?>
                <img src="<?php echo e(asset('img/logo.svg')); ?>" alt="Porsche">
                <?php endif; ?>
            </div>

            <h2 class="text-2xl font-bold tracking-tight text-center">
                <?php echo e($header ?? null); ?>

            </h2>

            <div>
               <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/layouts/guest.blade.php ENDPATH**/ ?>