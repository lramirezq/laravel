<?php if (isset($component)) { $__componentOriginal00ce306671dddf92a9de0a354be76ef1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00ce306671dddf92a9de0a354be76ef1 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Container::resolve(['label' => ''.e(trans('tomato-admin::global.crud.create')).' '.e(trans('tomato-backup::global.title')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Container::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col space-y-4','action' => ''.e(route('admin.backup.store')).'','method' => 'post']); ?>

        <?php if (isset($component)) { $__componentOriginal6b47701ad3db60e90de97cc731fca5d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6b47701ad3db60e90de97cc731fca5d8 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Radios::resolve(['name' => 'type','label' => trans('tomato-backup::global.type'),'options' => [
            'db' => trans('tomato-backup::global.db'),
            'files' => trans('tomato-backup::global.files'),
            'database_files' => trans('tomato-backup::global.database_files'),
        ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-radios'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Radios::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6b47701ad3db60e90de97cc731fca5d8)): ?>
<?php $attributes = $__attributesOriginal6b47701ad3db60e90de97cc731fca5d8; ?>
<?php unset($__attributesOriginal6b47701ad3db60e90de97cc731fca5d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6b47701ad3db60e90de97cc731fca5d8)): ?>
<?php $component = $__componentOriginal6b47701ad3db60e90de97cc731fca5d8; ?>
<?php unset($__componentOriginal6b47701ad3db60e90de97cc731fca5d8); ?>
<?php endif; ?>

        <div class="flex justify-start gap-2 pt-3">
            <?php if (isset($component)) { $__componentOriginal02f63f8917dc17788abae033ce6ff337 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal02f63f8917dc17788abae033ce6ff337 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Submit::resolve(['label' => ''.e(__('Save')).'','spinner' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Submit::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal02f63f8917dc17788abae033ce6ff337)): ?>
<?php $attributes = $__attributesOriginal02f63f8917dc17788abae033ce6ff337; ?>
<?php unset($__attributesOriginal02f63f8917dc17788abae033ce6ff337); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal02f63f8917dc17788abae033ce6ff337)): ?>
<?php $component = $__componentOriginal02f63f8917dc17788abae033ce6ff337; ?>
<?php unset($__componentOriginal02f63f8917dc17788abae033ce6ff337); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['secondary' => true,'label' => ''.e(__('Cancel')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.backup.index'))]); ?>
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
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $attributes = $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $component = $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00ce306671dddf92a9de0a354be76ef1)): ?>
<?php $attributes = $__attributesOriginal00ce306671dddf92a9de0a354be76ef1; ?>
<?php unset($__attributesOriginal00ce306671dddf92a9de0a354be76ef1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00ce306671dddf92a9de0a354be76ef1)): ?>
<?php $component = $__componentOriginal00ce306671dddf92a9de0a354be76ef1; ?>
<?php unset($__componentOriginal00ce306671dddf92a9de0a354be76ef1); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-backup/src/../resources/views/backup/create.blade.php ENDPATH**/ ?>