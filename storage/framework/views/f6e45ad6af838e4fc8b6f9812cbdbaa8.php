<?php if (isset($component)) { $__componentOriginal35c255806037bacb49330646f09778af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35c255806037bacb49330646f09778af = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(trans('tomato-admin::global.profile.index')); ?>

     <?php $__env->endSlot(); ?>

    <div class="pb-12">
        <div class="mx-auto  space-y-6">
            <div class="dark:bg-gray-800 dark:text-white p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl" dusk="update-profile-information">
                    <?php echo $__env->make('tomato-admin::profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <div class="dark:bg-gray-800 dark:text-white p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl" dusk="update-password">
                    <?php echo $__env->make('tomato-admin::profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <?php if(Laravel\Fortify\Features::canManageTwoFactorAuthentication()): ?>
                <div class="dark:bg-gray-800 dark:text-white p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl" dusk="logout-other-browser-sessions-form">
                        <?php echo $__env->make('tomato-admin::profile.partials.two-factor-authentication-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="dark:bg-gray-800 dark:text-white p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl" dusk="logout-other-browser-sessions-form">
                    <?php echo $__env->make('tomato-admin::profile.partials.logout-other-browser-sessions-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>

            <?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
                <div class="dark:bg-gray-800 dark:text-white p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl" dusk="delete-user">
                        <?php echo $__env->make('tomato-admin::profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35c255806037bacb49330646f09778af)): ?>
<?php $attributes = $__attributesOriginal35c255806037bacb49330646f09778af; ?>
<?php unset($__attributesOriginal35c255806037bacb49330646f09778af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35c255806037bacb49330646f09778af)): ?>
<?php $component = $__componentOriginal35c255806037bacb49330646f09778af; ?>
<?php unset($__componentOriginal35c255806037bacb49330646f09778af); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/profile/edit.blade.php ENDPATH**/ ?>