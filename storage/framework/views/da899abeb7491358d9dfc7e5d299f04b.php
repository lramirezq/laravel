<?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => $form->getData(),'submitOnChange' => $form->getOption('submit_on_change'),'background' => $form->getOption('background'),'debounce' => $form->getOption('debounce'),'preserveScroll' => $form->getOption('preserve_scroll')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => ''.e($form->getId()).'','method' => ''.e($form->getMethod()).'','action' => ''.e($form->getAction()).'','class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses($form->getClass())),'confirm' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('confirm')),'confirm-danger' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('confirm_danger')),'confirm-text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('text')),'confirm-button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('confirm_button')),'cancel-button' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('cancel_button')),'require-password' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('require_password')),'require-password-once' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('require_password_once')),'stay' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('stay')),'reset-on-success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('reset_on_success')),'restore-on-success' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($form->getOption('restore_on_success'))]); ?>
    <?php $__currentLoopData = $form->getFields(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $field->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php echo e($slot ?? ''); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $attributes = $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a)): ?>
<?php $component = $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a; ?>
<?php unset($__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a); ?>
<?php endif; ?><?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/functional/form-builder.blade.php ENDPATH**/ ?>