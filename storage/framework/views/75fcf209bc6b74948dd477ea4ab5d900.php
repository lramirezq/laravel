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
    <div class="flex flex-col gap-4">
        <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getDashboardTop(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- Dashboard Widgets -->
        <div class="grid grid-cols-1 gap-4 mb-6 filament-widgets-container md:grid-cols-2 lg:grid-cols-2 lg:gap-8">
            <?php
                $hasWidgets = \TomatoPHP\TomatoAdmin\Services\TomatoWidget::get();
            ?>
            <?php if(count($hasWidgets)): ?>
                <?php $__currentLoopData = $hasWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginala6380e5d204a3c40c28cfa9d9ffd2fc0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala6380e5d204a3c40c28cfa9d9ffd2fc0 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Widget::resolve(['counter' => $widget->counter,'title' => $widget->title,'model' => $widget->model,'query' => $widget->query,'icon' => $widget->icon] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-widget'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Widget::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala6380e5d204a3c40c28cfa9d9ffd2fc0)): ?>
<?php $attributes = $__attributesOriginala6380e5d204a3c40c28cfa9d9ffd2fc0; ?>
<?php unset($__attributesOriginala6380e5d204a3c40c28cfa9d9ffd2fc0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala6380e5d204a3c40c28cfa9d9ffd2fc0)): ?>
<?php $component = $__componentOriginala6380e5d204a3c40c28cfa9d9ffd2fc0; ?>
<?php unset($__componentOriginala6380e5d204a3c40c28cfa9d9ffd2fc0); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                <?php if(!count(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getDashboardTop())): ?>
                    <div class="col-span-1 filament-widget filament-account-widget">
                    <div class="p-2 space-y-2 bg-white shadow rounded-xl dark:border-gray-600 dark:bg-gray-800">
                        <div class="space-y-2">
                            <div class="px-4 py-2 space-y-4">
                                <div class="flex items-center h-12 space-v-4 rtl:space-v-reverse">
                                    <div class="w-10 h-10 mx-4 bg-gray-200 bg-center bg-cover rounded-full dark:bg-gray-900"
                                         style="background-image: url('https://avatars.dicebear.com/api/initials/<?php echo e(auth()->user()->name); ?>.svg')">
                                    </div>

                                    <div>
                                        <h2 class="text-lg font-bold tracking-tight sm:text-xl">
                                            <?php echo e(trans('tomato-admin::global.welcome')); ?>, <?php echo e(auth()->user()->name); ?>

                                        </h2>

                                        <Link href="<?php echo e(route('logout')); ?>" method="POST"
                                              class="text-gray-600 hover:text-primary-500 focus:outline-none focus:underline dark:text-gray-300 dark:hover:text-primary-500">
                                            <?php echo e(trans('tomato-admin::global.logout')); ?>

                                        </Link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getDashboardBottom(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/pages/dashboard.blade.php ENDPATH**/ ?>