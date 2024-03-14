<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-white">
            <?php echo e(trans('tomato-admin::global.profile.delete-title')); ?>

        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
            <?php echo e(trans('tomato-admin::global.profile.delete-description')); ?>

        </p>
    </header>

    <Link href="#confirm-user-deletion" dusk="open-delete-modal" class="inline-flex rounded-md shadow-sm bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
        <?php echo e(trans('tomato-admin::global.profile.delete-button')); ?>

    </Link>

    <?php if (isset($component)) { $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Modal::resolve(['name' => 'confirm-user-deletion'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Modal::class))->getConstructor()): ?>
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
<?php $component->withAttributes(['dusk' => 'confirm-user-deletion','method' => 'delete','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.profile.destroy'))]); ?>
            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                <?php echo e(trans('tomato-admin::global.profile.delete-model-title')); ?>

            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-300">
                <?php echo e(trans('tomato-admin::global.profile.delete-model-description')); ?>

            </p>

            <div class="mt-6">
                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'password','type' => 'password'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'password','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('tomato-admin::global.profile.delete-model-password'))]); ?>
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

            <div class="mt-6 flex justify-end">
                <button type="button" @click.prevent="modal.close" class="inline-flex rounded-md shadow-sm border border-gray-300 bg-white text-gray-700 hover:bg-gray-50 font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                    <?php echo e(trans('tomato-admin::global.cancel')); ?>

                </button>

                <button dusk="confirm-delete-account" type="submit" class="ml-3 inline-flex rounded-md shadow-sm bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 focus:outline-none focus:shadow-outline">
                    <?php echo e(trans('tomato-admin::global.profile.delete-model-button')); ?>

                </button>
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
<?php if (isset($__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721)): ?>
<?php $attributes = $__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721; ?>
<?php unset($__attributesOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721)): ?>
<?php $component = $__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721; ?>
<?php unset($__componentOriginal3ace2ce9b7b6a89aff3b69f8f4ac5721); ?>
<?php endif; ?>
</section>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/profile/partials/delete-user-form.blade.php ENDPATH**/ ?>