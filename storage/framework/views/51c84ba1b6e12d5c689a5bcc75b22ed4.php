<div class="flex justify-start gap-4 ml-4 rtl:mr-4">
    <div class="flex flex-col justify-center items-center">
        <?php if (isset($component)) { $__componentOriginal2c282bfe489689f4f75d029a5a1cddf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Dropdown::resolve(['id' => 'profile-dropdown'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('button', null, []); ?> 
                <div class="filament-dropdown-trigger cursor-pointer">
                    <?php
                        $grav_url = auth()->user()->profile_photo_url;
                    ?>
                        <!-- Profile -->
                    <div class="w-10 h-10 rounded-full bg-gray-200 bg-cover bg-center dark:bg-gray-900" style="background-image: url('<?php echo e($grav_url); ?>')">
                    </div>
                </div>
             <?php $__env->endSlot(); ?>

            <!-- Team Management -->
            <div class="block px-4 py-2 text-xs text-gray-400">
                <?php echo e(__('Manage Account')); ?>

            </div>


            <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['type' => 'link','icon' => 'bx bxs-user','label' => auth()->user()->name] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.profile.edit'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
            <?php if(\Laravel\Jetstream\Jetstream::hasApiFeatures()): ?>
                <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['type' => 'link','icon' => 'bx bxs-lock','label' => __('API Tokens')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.api-tokens.index'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
            <?php endif; ?>
            <div class="border-t border-gray-200 dark:border-gray-600" />
            <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['danger' => true,'type' => 'link','icon' => 'bx bx-log-out','label' => trans('tomato-admin::global.logout')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'POST','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('logout'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0)): ?>
<?php $attributes = $__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0; ?>
<?php unset($__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c282bfe489689f4f75d029a5a1cddf0)): ?>
<?php $component = $__componentOriginal2c282bfe489689f4f75d029a5a1cddf0; ?>
<?php unset($__componentOriginal2c282bfe489689f4f75d029a5a1cddf0); ?>
<?php endif; ?>
    </div>
</div>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/profile-dropdown.blade.php ENDPATH**/ ?>