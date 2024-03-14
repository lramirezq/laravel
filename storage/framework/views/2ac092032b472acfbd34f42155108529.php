<?php if (isset($component)) { $__componentOriginal790f0f07a99dc6a1a8ed8af0506c4dd6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal790f0f07a99dc6a1a8ed8af0506c4dd6 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__('Login')); ?>

     <?php $__env->endSlot(); ?>

    <?php if (isset($component)) { $__componentOriginal84832cb34a2114a104b2247450aa5152 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal84832cb34a2114a104b2247450aa5152 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\AuthSessionStatus::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-auth-session-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\AuthSessionStatus::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal84832cb34a2114a104b2247450aa5152)): ?>
<?php $attributes = $__attributesOriginal84832cb34a2114a104b2247450aa5152; ?>
<?php unset($__attributesOriginal84832cb34a2114a104b2247450aa5152); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal84832cb34a2114a104b2247450aa5152)): ?>
<?php $component = $__componentOriginal84832cb34a2114a104b2247450aa5152; ?>
<?php unset($__componentOriginal84832cb34a2114a104b2247450aa5152); ?>
<?php endif; ?>
    <div class="space-y-8">
        <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'space-y-4']); ?>
            <div class="grid grid-cols-1 gap-6 filament-forms-component-container">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['type' => 'email','name' => 'email','label' => __('Email')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','required' => true,'autofocus' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['type' => 'password','name' => 'password','label' => __('Password')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password','required' => true,'autocomplete' => 'current-password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $attributes = $__attributesOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__attributesOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal690b64017277cbdd89bc2d788db21f28)): ?>
<?php $component = $__componentOriginal690b64017277cbdd89bc2d788db21f28; ?>
<?php unset($__componentOriginal690b64017277cbdd89bc2d788db21f28); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Checkbox::resolve(['name' => 'remember','label' => __('Remember me')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember_me']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $attributes = $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed)): ?>
<?php $component = $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed; ?>
<?php unset($__componentOriginal76ab60a8762e3c5542f741a9efaac6ed); ?>
<?php endif; ?>
            </div>

            <div class="flex items-center justify-between">
                <?php if(Route::has('password.request')): ?>
                    <Link class="underline text-sm text-gray-600 dark:text-gray-300 dark:hover:text-gray-500 hover:text-gray-900" href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Forgot your password?')); ?>

                    </Link>
                <?php endif; ?>

                <?php if (isset($component)) { $__componentOriginal2d975ce603f483bebe2dbee59a477e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d975ce603f483bebe2dbee59a477e99 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Submit::resolve(['label' => __('Log in')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Submit::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ml-3']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2d975ce603f483bebe2dbee59a477e99)): ?>
<?php $attributes = $__attributesOriginal2d975ce603f483bebe2dbee59a477e99; ?>
<?php unset($__attributesOriginal2d975ce603f483bebe2dbee59a477e99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d975ce603f483bebe2dbee59a477e99)): ?>
<?php $component = $__componentOriginal2d975ce603f483bebe2dbee59a477e99; ?>
<?php unset($__componentOriginal2d975ce603f483bebe2dbee59a477e99); ?>
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
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal790f0f07a99dc6a1a8ed8af0506c4dd6)): ?>
<?php $attributes = $__attributesOriginal790f0f07a99dc6a1a8ed8af0506c4dd6; ?>
<?php unset($__attributesOriginal790f0f07a99dc6a1a8ed8af0506c4dd6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal790f0f07a99dc6a1a8ed8af0506c4dd6)): ?>
<?php $component = $__componentOriginal790f0f07a99dc6a1a8ed8af0506c4dd6; ?>
<?php unset($__componentOriginal790f0f07a99dc6a1a8ed8af0506c4dd6); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/auth/login.blade.php ENDPATH**/ ?>