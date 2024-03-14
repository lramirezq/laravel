<div <?php if(isset($table)): ?> class="grid grid-cols-1 gap-2" <?php elseif($inline): ?> class="flex justify-between border-b pb-3 mb-3" <?php endif; ?>>
    <?php if(!isset($table)): ?>
        <?php if($inline): ?>
            <div class="flex items-center justify-between gap-x-3">
                <dt class="inline-flex items-center gap-x-3">
                <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                    <?php echo e($label); ?>

                </span>
                </dt>
            </div>
        <?php else: ?>
            <div class="flex items-center justify-between gap-x-3">
                <dt class="inline-flex items-center gap-x-3">
                <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
                    <?php echo e($label); ?>

                </span>
                </dt>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="grid gap-y-2">
        <?php if($type ==='bool' || !empty($value)): ?>
        <?php if($type === 'text' || $type === 'string' || $type === 'rich'): ?>
        <div class="flex fi-in-text">
            <?php if($href): ?>
            <a class="min-w-0 flex-1" href="<?php echo e($href); ?>" target="_blank">
                <div class="inline-flex items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white underline" >
                    <?php echo $value; ?>

                </div>
            </a>
            <?php else: ?>
                <div class="min-w-0 flex-1">
                    <div class="inline-flex items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white" >
                        <?php echo $value; ?>

                    </div>
                </div>
            <?php endif; ?>
        </div>
        <?php elseif($type === 'password'): ?>
            <div class="flex justify-start gap-2">
                <div class="flex flex-col justify-center items-center">
                    <?php if (isset($component)) { $__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Copy::resolve(['text' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-copy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Copy::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['text' => __('Copy')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <i class="bx bx-copy"></i>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256)): ?>
<?php $attributes = $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256; ?>
<?php unset($__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256)): ?>
<?php $component = $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256; ?>
<?php unset($__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b)): ?>
<?php $attributes = $__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b; ?>
<?php unset($__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b)): ?>
<?php $component = $__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b; ?>
<?php unset($__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b); ?>
<?php endif; ?>
                </div>
                <div>
                    *********
                </div>
            </div>
        <?php elseif($type === 'copy'): ?>
            <div class="flex justify-start gap-2">
                <div class="flex flex-col justify-center items-center">
                    <?php if (isset($component)) { $__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Copy::resolve(['text' => $value] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-copy'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Copy::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

                    <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['text' => __('Copy')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <i class="bx bx-copy"></i>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256)): ?>
<?php $attributes = $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256; ?>
<?php unset($__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256)): ?>
<?php $component = $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256; ?>
<?php unset($__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b)): ?>
<?php $attributes = $__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b; ?>
<?php unset($__attributesOriginal6171fbb4c39c14aa5d7553bad894dd0b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b)): ?>
<?php $component = $__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b; ?>
<?php unset($__componentOriginal6171fbb4c39c14aa5d7553bad894dd0b); ?>
<?php endif; ?>
                </div>
                <div>
                    <?php echo e($value); ?>

                </div>
            </div>
        <?php elseif($type === 'badge'): ?>
            <?php if($href): ?>
            <?php if (isset($component)) { $__componentOriginal9201898bb20e70f80043aa5944b64393 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9201898bb20e70f80043aa5944b64393 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'class' => 'flex fi-in-text']); ?>
                <div class="min-w-0 flex-1">
                    <div
                        <?php if($color): ?>
                            style="
                                color: <?php echo e($color); ?> !important;
                            "
                        <?php endif; ?>
                            class="bg-primary-100 whitespace-nowrap inline-flex items-center gap-2 justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal text-primary-700 bg-primary-500/10 dark:text-primary-500" >
                        <?php if($icon): ?>
                            <i class="<?php echo e($icon); ?>" ></i>
                        <?php endif; ?>
                        <?php echo $value; ?>

                    </div>
                </div>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9201898bb20e70f80043aa5944b64393)): ?>
<?php $attributes = $__attributesOriginal9201898bb20e70f80043aa5944b64393; ?>
<?php unset($__attributesOriginal9201898bb20e70f80043aa5944b64393); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9201898bb20e70f80043aa5944b64393)): ?>
<?php $component = $__componentOriginal9201898bb20e70f80043aa5944b64393; ?>
<?php unset($__componentOriginal9201898bb20e70f80043aa5944b64393); ?>
<?php endif; ?>
            <?php else: ?>
            <div class="flex fi-in-text">
                <div class="min-w-0 flex-1">
                    <div class="bg-primary-100 whitespace-nowrap inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal text-primary-700 bg-primary-500/10 dark:text-primary-500" >
                        <?php echo $value; ?>

                    </div>
                </div>
            </div>
            <?php endif; ?>
        <?php elseif($type === 'date'): ?>
                <div class="flex fi-in-text">
                    <div class="min-w-0 flex-10">
                        <div class="flex justifiy-start items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white  text-primary-600" >
                            <div class="flex flex-col item-center justifiy-center">
                                <i class="bx bx-calendar"></i>
                            </div>
                            <div>
                                <?php echo e($value); ?>

                            </div>
                        </div>
                    </div>
                </div>
        <?php elseif($type === 'datetime'): ?>
                <div class="flex fi-in-text">
                    <div class="min-w-0 flex-10">
                        <div class="flex justifiy-start items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white  text-primary-600" >
                            <div class="flex flex-col item-center justifiy-center">
                                <i class="bx bx-calender"></i>
                            </div>
                            <div>
                                <?php echo e($value); ?>

                            </div>
                        </div>
                    </div>
                </div>
        <?php elseif($type === 'time'): ?>
            <div class="flex fi-in-text">
                <div class="min-w-0 flex-10">
                    <div class="flex justifiy-start items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white  text-primary-600" >
                        <div class="flex flex-col item-center justifiy-center">
                            <i class="bx bx-time"></i>
                        </div>
                        <div>
                            <?php echo e($value); ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php elseif($type === 'number'): ?>
            <div class="flex fi-in-text">
                <div class="min-w-0 flex-1">
                    <div class="inline-flex items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white" >
                       <?php echo e(number_format($value, 2)); ?>

                    </div>
                </div>
            </div>
        <?php elseif($type === 'color'): ?>
            <div class="flex fi-in-text">
                <div class="min-w-0 flex-1">
                    <div class="w-8 h-8 rounded-lg" style="background-color: <?php echo e($value); ?>"></div>
                </div>
            </div>
        <?php elseif($type === 'icon'): ?>
            <div class="flex fi-in-text">
                <div class="min-w-0 flex-1">
                    <div class="inline-flex items-center gap-1.5 leading-6 text-gray-950 dark:text-white" >
                        <i class="<?php echo e($value); ?>"></i>
                    </div>
                </div>
            </div>
        <?php elseif($type === 'tel'): ?>
            <a href="tel:<?php echo e($value); ?>" target="_blank" class="flex fi-in-text">
                <div class="min-w-0 flex-10">
                    <div class="flex justifiy-start items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white  text-primary-600" >
                        <div class="flex flex-col item-center justifiy-center">
                            <i class="bx bx-phone"></i>
                        </div>
                        <div>
                            <?php echo e($value); ?>

                        </div>
                    </div>
                </div>
            </a>
        <?php elseif($type === 'email'): ?>
            <a href="mailto:<?php echo e($value); ?>" target="_blank" class="flex fi-in-text">
                <div class="min-w-0 flex-10">
                    <div class="flex justifiy-start items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white  text-primary-600" >
                        <div class="flex flex-col item-center justifiy-center">
                            <i class="bx bx-envelope"></i>
                        </div>
                        <div>
                            <?php echo e($value); ?>

                        </div>
                    </div>
                </div>
            </a>
        <?php elseif($type === 'bool'): ?>
            <div class="flex fi-in-text">
                <div class="min-w-0 flex-10">
                    <div class="flex justifiy-start items-center gap-1.5 text-sm leading-6 text-gray-950 dark:text-white" >
                        <?php if($value === true): ?>
                            <div class="w-4 h-4 bg-success-500 rounded-full">

                            </div>
                        <?php else: ?>
                            <div class="w-4 h-4 bg-gray-500 rounded-full">

                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        <?php elseif($type === 'images'): ?>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-2 mt-3">
            <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e($image->getUrl()); ?>" target="_blank">
                        <?php if(\Illuminate\Support\Str::contains($image->getUrl(), ['jpeg', 'jpg', 'png', 'gif', 'svg', 'webp', 'tif'])): ?>
                        <div class="bg-cover bg-center w-16 h-16 rounded-lg"  style="background-image:url('<?php echo e($image->getUrl()); ?>') ">
                        </div>
                            <?php elseif(!empty($image->getUrl())): ?>
                                                    <span class="text-primary-500 font-bold"><?php echo e(__('Download File')); ?>[<?php echo e($key); ?>]</span>

                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php elseif($type === 'image'): ?>
            <a href="<?php echo e($value); ?>" class="mt-3" target="_blank">
                <?php if(\Illuminate\Support\Str::contains( $value, ['jpeg', 'jpg', 'png', 'gif', 'svg', 'webp', 'tif'])): ?>
                <div class="bg-cover bg-center w-16 h-16 rounded-lg"  style="background-image:url('<?php echo e($value); ?>') ">
                </div>
                <?php elseif(!empty($value)): ?>
                    <span><?php echo e(__('Download File')); ?></span>
                <?php else: ?>
                    -
                <?php endif; ?>
            </a>
        <?php else: ?>
            -
            <?php endif; ?>
        <?php else: ?>
            -
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/row.blade.php ENDPATH**/ ?>