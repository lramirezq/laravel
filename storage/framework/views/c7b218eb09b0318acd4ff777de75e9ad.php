<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-white">
            <?php echo e(__('Profile Information')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
            <?php echo e(__('Update your account\'s profile information and email address.')); ?>

        </p>
    </header>

    <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => auth()->user()] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'put','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('user-profile-information.update')),'stay' => true,'@success' => '$splade.emit(\'profile-information-updated\')']); ?>
        <div class="grid grid-cols-6 gap-6">
            <!-- Profile Photo -->
            <?php if(Laravel\Jetstream\Jetstream::managesProfilePhotos()): ?>
                <div class="col-span-6 sm:col-span-4">
                    <span class="block mb-1 text-gray-700 font-sans"><?php echo e(__('Photo')); ?></span>

                    <!-- Current Profile Photo -->
                    <div v-show="!form.photo" class="mt-2">
                        <img src="<?php echo e(auth()->user()->profile_photo_url); ?>" alt="<?php echo e(auth()->user()->name); ?>" class="rounded-full h-20 w-20 object-cover">
                    </div>

                    <!-- New Profile Photo Preview -->
                    <div v-show="form.photo" class="mt-2">
                        <span
                            class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                            :style="'background-image: url(\'' + form.$fileAsUrl('photo') + '\');'"
                        />
                    </div>

                    <!-- Profile Photo File Input -->
                    <div class="flex mt-2 space-x-2">
                        <?php if (isset($component)) { $__componentOriginal4cd41e82379e83253fe439725f650e27 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4cd41e82379e83253fe439725f650e27 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\File::resolve(['name' => 'photo','showFilename' => false] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-file'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\File::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo e(__('Select A New Photo')); ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $attributes = $__attributesOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__attributesOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4cd41e82379e83253fe439725f650e27)): ?>
<?php $component = $__componentOriginal4cd41e82379e83253fe439725f650e27; ?>
<?php unset($__componentOriginal4cd41e82379e83253fe439725f650e27); ?>
<?php endif; ?>

                        <?php if (isset($component)) { $__componentOriginald2d6c083a6ba354aea65852a27c762df = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2d6c083a6ba354aea65852a27c762df = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Rehydrate::resolve(['on' => 'profile-information-updated'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-rehydrate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Rehydrate::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php if(auth()->user()->profile_photo_path): ?>
                                <?php if (isset($component)) { $__componentOriginal9201898bb20e70f80043aa5944b64393 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9201898bb20e70f80043aa5944b64393 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'delete','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('current-user-photo.destroy')),'class' => 'inline-block py-2 px-3 rounded-md border border-gray-300 shadow-sm bg-white hover:bg-gray-100 relative cursor-pointer font-medium text-gray-700 text-sm focus:outline-none focus:ring focus:ring-opacity-50 focus:border-indigo-300 focus:ring-indigo-200']); ?>
                                    <?php echo e(__('Remove Photo')); ?>

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
                            <?php endif; ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2d6c083a6ba354aea65852a27c762df)): ?>
<?php $attributes = $__attributesOriginald2d6c083a6ba354aea65852a27c762df; ?>
<?php unset($__attributesOriginald2d6c083a6ba354aea65852a27c762df); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2d6c083a6ba354aea65852a27c762df)): ?>
<?php $component = $__componentOriginald2d6c083a6ba354aea65852a27c762df; ?>
<?php unset($__componentOriginald2d6c083a6ba354aea65852a27c762df); ?>
<?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Name -->
            <div class="col-span-6 sm:col-span-4">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'name','label' => __('Name')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'name','autocomplete' => 'name']); ?>
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
            </div>

            <!-- Email -->
            <div class="col-span-6 sm:col-span-4">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'email','type' => 'email','label' => __('Email')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'email','autocomplete' => 'name']); ?>
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
                <div id="verify-email" />
            </div>
        </div>
        <div class="mt-4">
            <p v-if="form.recentlySuccessful" class="text-sm text-gray-600 dark:text-gray-300">
                <?php echo e(trans('tomato-admin::global.saved')); ?>

            </p>

            <?php if (isset($component)) { $__componentOriginal2d975ce603f483bebe2dbee59a477e99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2d975ce603f483bebe2dbee59a477e99 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Submit::resolve(['label' => __('Save')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Submit::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

    <?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::emailVerification()) && !auth()->user()->hasVerifiedEmail()): ?>
        
        <?php if (isset($component)) { $__componentOriginalff0629c8dd36c8dcb1d50bc57a8e5df5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff0629c8dd36c8dcb1d50bc57a8e5df5 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Teleport::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-teleport'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Teleport::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['to' => '#verify-email']); ?>
            <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('verification.send')),'stay' => true]); ?>
                <p v-if="!form.wasSuccessful" class="text-sm mt-2 dark:text-white">
                    <?php echo e(__('Your email address is unverified.')); ?>


                    <button type="submit" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 inline">
                        <?php echo e(__('Click here to re-send the verification email.')); ?>

                    </button>
                </p>

                <div v-if="form.wasSuccessful" class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                    <?php echo e(__('A new verification link has been sent to your email address.')); ?>

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
<?php if (isset($__attributesOriginalff0629c8dd36c8dcb1d50bc57a8e5df5)): ?>
<?php $attributes = $__attributesOriginalff0629c8dd36c8dcb1d50bc57a8e5df5; ?>
<?php unset($__attributesOriginalff0629c8dd36c8dcb1d50bc57a8e5df5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff0629c8dd36c8dcb1d50bc57a8e5df5)): ?>
<?php $component = $__componentOriginalff0629c8dd36c8dcb1d50bc57a8e5df5; ?>
<?php unset($__componentOriginalff0629c8dd36c8dcb1d50bc57a8e5df5); ?>
<?php endif; ?>
    <?php endif; ?>
</section>



<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/profile/partials/update-profile-information-form.blade.php ENDPATH**/ ?>