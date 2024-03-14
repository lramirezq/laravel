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
        <?php echo e(trans('tomato-translations::global.title')); ?>

     <?php $__env->endSlot(); ?>
     <?php $__env->slot('buttons', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['type' => 'link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.translations.scan'))]); ?>
            <?php echo e(trans('tomato-translations::global.scan')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $attributes = $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $component = $__componentOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['type' => 'link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.translations.auto'))]); ?>
            <?php echo e(trans('tomato-translations::global.auto')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $attributes = $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $component = $__componentOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['type' => 'link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['modal' => true,'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.translations.importView'))]); ?>
            <?php echo e(trans('tomato-translations::global.import')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $attributes = $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $component = $__componentOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
        <a class="filament-button inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4 text-sm shadow-sm focus:ring-white filament-page-button-action bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 text-white border-transparent" target="_blank" href="<?php echo e(route('admin.translations.export')); ?>">
            <?php echo e(trans('tomato-translations::global.export')); ?>

        </a>
     <?php $__env->endSlot(); ?>


    <div class="pb-12" v-cloak>
        <div class="mx-auto">
            <?php if (isset($component)) { $__componentOriginal9e290f7144d9abd075e5cf038a814133 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e290f7144d9abd075e5cf038a814133 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Table::resolve(['for' => $table,'striped' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__env->slot('spladeTableCellebb67a4271abe715344471b0f16321f6', function ($item, $key) use ($__env) { ?> 
                    <div class="flex justify-start">
                        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['type' => 'icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['modal' => true,'title' => ''.e(trans('tomato-translations::global.translate')).'','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.translations.edit', $item->id))]); ?>
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-language'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $attributes = $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c)): ?>
<?php $component = $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c; ?>
<?php unset($__componentOriginal643fe1b47aec0b76658e1a0200b34b2c); ?>
<?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $attributes = $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__attributesOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de)): ?>
<?php $component = $__componentOriginalac1c2c5915b4ce023a8186239e03c2de; ?>
<?php unset($__componentOriginalac1c2c5915b4ce023a8186239e03c2de); ?>
<?php endif; ?>
                    </div>
                 <?php }); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $attributes = $__attributesOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__attributesOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $component = $__componentOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__componentOriginal9e290f7144d9abd075e5cf038a814133); ?>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-translations/src/../resources/views/index.blade.php ENDPATH**/ ?>