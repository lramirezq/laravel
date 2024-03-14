<?php if (isset($component)) { $__componentOriginal00ce306671dddf92a9de0a354be76ef1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00ce306671dddf92a9de0a354be76ef1 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Container::resolve(['label' => ''.e(trans('tomato-admin::global.crud.edit')).' '.e(trans('tomato-roles::global.roles.single')).' #'.e($model['id']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Container::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => $model] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'flex flex-col space-y-4 mb-4','action' => ''.e(route('admin.roles.update', $model->id)).'','method' => 'post']); ?>

        <div class="flex justify-between">
            <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'name','type' => 'text','label' => trans('tomato-roles::global.roles.name')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full mr-2 rtl:ml-2','placeholder' => ''.e(trans('tomato-roles::global.roles.name')).'']); ?>
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
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['name' => 'guard_name','type' => 'text','label' => trans('tomato-roles::global.roles.guard_name')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-full','placeholder' => ''.e(trans('tomato-roles::global.roles.guard_name')).'']); ?>
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

        <?php if (isset($component)) { $__componentOriginale6278a0588d6b97345ecb6e9bf149e6c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale6278a0588d6b97345ecb6e9bf149e6c = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Data::resolve(['default' => ['permissions' => $permissionNames, 'table' => []]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-data'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Data::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <div>
                <label class="flex items-center">
                    <input
                           type="checkbox"
                           :checked="form.permissions.length? true : false"
                           class="dark:bg-gray-700 dark:border-gray-600 rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50"
                           @change="form.permissions = form.permissions.length? [] : data.permissions"
                    >
                    <span class="ml-2 rtl:mr-2 rtl:ml-0 dark:text-gray-200"><?php echo e(__('Select All')); ?></span>
                </label>
            </div>
            <div class="grid grid-cols-1 gap-4">
                <?php $__currentLoopData = $perm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissionTable): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div>
                        <div class="flex justifiy-between gap-4">
                            <div class="w-full">
                                <h3 class="text-md font-bold"><?php echo e(\Illuminate\Support\Str::of($permissionTable[0]['table'])->replace('_', ' ')->ucfirst()); ?></h3>
                            </div>
                            <div class="flex justifiy-end">
                                <?php
                                    $collectPermissionTableName = collect($permissionTable)->map(fn($item) => $item['name'])->toArray();
                                    $collectPermissionTable = collect($permissionTable)->map(fn($item) => $item['name'])->toArray();
                                ?>
                                <label class="flex items-center">
                                    <input
                                        type="checkbox"
                                        v-model="data.table['<?php echo e($permissionTable[0]['table']); ?>']"
                                        :checked="form.permissions.includes(<?php echo e(str_replace(']', '', str_replace('[','', json_encode($collectPermissionTableName)))); ?>) ? true : false"
                                        class="dark:bg-gray-700 dark:border-gray-600 rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 disabled:opacity-50"
                                        @change="
                                            let perm = <?php echo \Illuminate\Support\Js::from($collectPermissionTable)->toHtml() ?>;

                                            if(!data.table['<?php echo e($permissionTable[0]['table']); ?>']){
                                                for(let i=0; i<perm.length; i++){
                                                    form.permissions.splice(form.permissions.indexOf(perm[i]), 1)
                                                }
                                            }else{
                                                for(let i=0; i<perm.length; i++){
                                                    form.permissions.push(perm[i])
                                                }
                                            }
                                        "
                                    >

                                </label>
                            </div>

                        </div>
                        <?php if (isset($component)) { $__componentOriginalf2931fc266eff6f4b8e92be72ba5930e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Group::resolve(['name' => 'permissions'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Group::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <div class="border p-4 rounded-lg grid grid-cols-2 gap-2 mt-2 shadow-sm">
                                <?php $__currentLoopData = $permissionTable; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $name = \Illuminate\Support\Str::of($permission['name'])
                                            ->remove('admin.')
                                            ->remove($permission['table'] . '.')
                                             ->replace('-', ' ')
                                             ->ucfirst()
                                            ->explode('.')
                                            ->implode(' ');
                                    ?>
                                    <?php if (isset($component)) { $__componentOriginal76ab60a8762e3c5542f741a9efaac6ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76ab60a8762e3c5542f741a9efaac6ed = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Checkbox::resolve(['label' => ''.e($name).'','name' => 'permissions[]','value' => ''.e($permission['name']).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Checkbox::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e)): ?>
<?php $attributes = $__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e; ?>
<?php unset($__attributesOriginalf2931fc266eff6f4b8e92be72ba5930e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf2931fc266eff6f4b8e92be72ba5930e)): ?>
<?php $component = $__componentOriginalf2931fc266eff6f4b8e92be72ba5930e; ?>
<?php unset($__componentOriginalf2931fc266eff6f4b8e92be72ba5930e); ?>
<?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

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

        <div class="flex justify-start gap-2">
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
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['danger' => true,'method' => 'delete','label' => ''.e(__('Delete')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.roles.destroy', $model->id)),'confirm' => ''.e(trans('tomato-admin::global.crud.delete-confirm')).'','confirm-text' => ''.e(trans('tomato-admin::global.crud.delete-confirm-text')).'','confirm-button' => ''.e(trans('tomato-admin::global.crud.delete-confirm-button')).'','cancel-button' => ''.e(trans('tomato-admin::global.crud.delete-confirm-cancel-button')).'']); ?>
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
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['secondary' => true,'label' => ''.e(__('Cancel')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.roles.index'))]); ?>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-roles/src/../resources/views/roles/edit.blade.php ENDPATH**/ ?>