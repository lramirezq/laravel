<div
        v-cloak
        v-show="data.makeMenuHide"
        @click.prevent="data.makeMenuHide = !data.makeMenuHide"
        class="fixed inset-0 z-20 w-full h-full filament-sidebar-close-overlay lg:hidden"
>

</div>
<aside
        :class="{
            'hidden': !data.makeMenuHide,
            'w-24': data.makeMenuMin,
            'w-72': !data.makeMenuMin
        }"
        class="
                    lg:flex
                    filament-sidebar-open
                    translate-x-0
                    max-w-[20em]
                    lg:max-w-[var(--sidebar-width)]
                    filament-sidebar
                    fixed
                    inset-y-0
                    left-0
                    rtl:left-auto
                    rtl:right-0
                    z-20
                    flex
                    flex-col
                    h-screen
                    overflow-hidden
                    shadow-2xl
                    transition-all
                    bg-gray-800
                    lg:z-0
                    dark:bg-gray-800
                    filament-sidebar-open
                    translate-x-0
                    max-w-[20em]
                    lg:max-w-[var(--sidebar-width)]
                ">

    <header
            class="
                bg-gray-900
                filament-sidebar-header
                h-[4rem]
                shrink-0
                px-6 flex items-center dark:border-gray-700"
    >
        <?php if(count(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLogoSection())): ?>
            <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getLogoSection(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
        <Link
                href="<?php echo e(route('admin')); ?>"
                class="block w-fulls font-bold"
                v-show="true"
                data-turbo="false"
                style=""
        >
            <?php if (isset($component)) { $__componentOriginal2b5fd8fda04af3f1a982046b029966ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b5fd8fda04af3f1a982046b029966ec = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\ApplicationLogo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\ApplicationLogo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'block h-9 w-auto fill-current text-primary-500']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b5fd8fda04af3f1a982046b029966ec)): ?>
<?php $attributes = $__attributesOriginal2b5fd8fda04af3f1a982046b029966ec; ?>
<?php unset($__attributesOriginal2b5fd8fda04af3f1a982046b029966ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b5fd8fda04af3f1a982046b029966ec)): ?>
<?php $component = $__componentOriginal2b5fd8fda04af3f1a982046b029966ec; ?>
<?php unset($__componentOriginal2b5fd8fda04af3f1a982046b029966ec); ?>
<?php endif; ?>
        </Link>
        <?php endif; ?>
    </header>

    <nav class="pb-6 overflow-y-auto filament-sidebar-nav" v-SpladePreserveScroll:0838fecfbd2ae7e09c7871ecf6313a4b>
        <div>
            <?php echo $__env->make('tomato-admin::layouts.includes.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </nav>
</aside>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/layouts/includes/aside.blade.php ENDPATH**/ ?>