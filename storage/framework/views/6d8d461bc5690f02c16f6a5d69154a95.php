<?php if (isset($component)) { $__componentOriginale6278a0588d6b97345ecb6e9bf149e6c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Data::resolve(['default' => '{
        makeMenuHide: false,
        makeMenuMin:  false,
        dark: false,
        lang: {
            id: \'en\',
            name: \'English\'
        },
        asideMenuGroup: {},
        groupOpened: false
    }','remember' => 'admin','localStorage' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<div class="filament-body bg-gray-50 text-gray-950 dark:text-white dark:bg-black font-main" @load="data.dark" id="appBody">
    <div class="filament-app-layout flex w-full min-h-screen overflow-v-clip">

        <?php if (isset($component)) { $__componentOriginal1ccc8d88c51a236c40cf06eabdbd5170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1ccc8d88c51a236c40cf06eabdbd5170 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Aside::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-aside'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Aside::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1ccc8d88c51a236c40cf06eabdbd5170)): ?>
<?php $attributes = $__attributesOriginal1ccc8d88c51a236c40cf06eabdbd5170; ?>
<?php unset($__attributesOriginal1ccc8d88c51a236c40cf06eabdbd5170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1ccc8d88c51a236c40cf06eabdbd5170)): ?>
<?php $component = $__componentOriginal1ccc8d88c51a236c40cf06eabdbd5170; ?>
<?php unset($__componentOriginal1ccc8d88c51a236c40cf06eabdbd5170); ?>
<?php endif; ?>
        <div
                :class="{
                        'lg:pl-24 lg:pl-24 rtl:lg:pr-24 rtl:lg:pl-0': data.makeMenuMin,
                        'lg:pl-72 lg:pl-72 rtl:lg:pr-72 rtl:lg:pl-0': !data.makeMenuMin
                    }"
                class="
                        flex
                        filament-main
                        flex-col
                        gap-y-6
                        w-screen
                        min-h-screen
                        transition-all
                        filament-main-sidebar-open
                    "
        >

            <?php if (isset($component)) { $__componentOriginala9450cff4c6c97b1f268295da0227252 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala9450cff4c6c97b1f268295da0227252 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala9450cff4c6c97b1f268295da0227252)): ?>
<?php $attributes = $__attributesOriginala9450cff4c6c97b1f268295da0227252; ?>
<?php unset($__attributesOriginala9450cff4c6c97b1f268295da0227252); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala9450cff4c6c97b1f268295da0227252)): ?>
<?php $component = $__componentOriginala9450cff4c6c97b1f268295da0227252; ?>
<?php unset($__componentOriginala9450cff4c6c97b1f268295da0227252); ?>
<?php endif; ?>

            <div class="filament-main-content flex-1 w-full px-4 mx-auto md:px-6 lg:px-8">
                <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLayoutTop(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(isset($header)): ?>
                <header class="flex justify-between mb-4">
                    <div>
                        <div class="flex flex-col items-center justify-center">
                            <div class="flex justify-start gap-2">
                                <div>
                                    <i class="<?php echo e($icon ?? 'bx bxs-category'); ?> text-1xl md:text-2xl font-bold text-primary-500"></i>
                                </div>
                                <h1 class="text-1xl md:text-2xl font-bold tracking-tight  filament-header-heading">
                                    <?php echo e($header ?? ''); ?>

                                </h1>
                            </div>
                        </div>

                        <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLayoutTitle(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <div class="flex jusitifiy-start gap-4">
                        <?php echo e($buttons ?? ''); ?>


                        <?php if(count(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLayoutButtons())): ?>
                        <div>
                            <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLayoutButtons(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </header>
                <?php endif; ?>
                <!-- SLOT -->
                <?php echo e($slot); ?>


            </div>

            <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLayoutBottom(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <!-- Footer -->
            <?php if (isset($component)) { $__componentOriginalce61fd71e32c3e81c8793389b72c131c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce61fd71e32c3e81c8793389b72c131c = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce61fd71e32c3e81c8793389b72c131c)): ?>
<?php $attributes = $__attributesOriginalce61fd71e32c3e81c8793389b72c131c; ?>
<?php unset($__attributesOriginalce61fd71e32c3e81c8793389b72c131c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce61fd71e32c3e81c8793389b72c131c)): ?>
<?php $component = $__componentOriginalce61fd71e32c3e81c8793389b72c131c; ?>
<?php unset($__componentOriginalce61fd71e32c3e81c8793389b72c131c); ?>
<?php endif; ?>
        </div>
    </div>
</div>
    <?php if (isset($component)) { $__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Script::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Script::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        if(localStorage.getItem("splade") && typeof document !== undefined){
                let spladeStorage = JSON.parse(localStorage.getItem("splade"));
        let dark = spladeStorage?.admin?.dark;
        document.body.classList[dark ? "add" : "remove"]("dark-scrollbars");
        document.documentElement.classList[dark ? "add" : "remove"]("dark");
        let htmlEl = document.querySelector("html");

        if ("<?php echo e(app()->getLocale()); ?>" === "ar") {
        htmlEl.setAttribute("dir", "rtl");
        } else {
        htmlEl.setAttribute("dir", "ltr");
        }
        }

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b)): ?>
<?php $attributes = $__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b; ?>
<?php unset($__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b)): ?>
<?php $component = $__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b; ?>
<?php unset($__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c)): ?>
<?php $attributes = $__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c; ?>
<?php unset($__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale6278a0588d6b97345ecb6e9bf149e6c)): ?>
<?php $component = $__componentOriginale6278a0588d6b97345ecb6e9bf149e6c; ?>
<?php unset($__componentOriginale6278a0588d6b97345ecb6e9bf149e6c); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/layouts/app.blade.php ENDPATH**/ ?>