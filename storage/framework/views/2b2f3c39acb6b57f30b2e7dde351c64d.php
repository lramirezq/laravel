<?php if (isset($component)) { $__componentOriginal584f017b33a17ce6e81d05c022b925ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal584f017b33a17ce6e81d05c022b925ba = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\SpladeComponent::resolve(['is' => 'button-with-dropdown'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\SpladeComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['dusk' => 'filters-dropdown','class' => 'w-full bg-white border border-gray-200 rounded-md shadow-sm px-2.5 sm:px-4 py-2 inline-flex justify-center text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 dark:hover:bg-gray-600  dark:bg-gray-700 dark:border-gray-600']); ?>
     <?php $__env->slot('button', null, []); ?> 
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
            :class="{
                'text-gray-400': !<?php echo \Illuminate\Support\Js::from($table->hasFiltersEnabled())->toHtml() ?>,
                'text-green-400': <?php echo \Illuminate\Support\Js::from($table->hasFiltersEnabled())->toHtml() ?>,
            }"
        >
            <path fill-rule="evenodd" d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z" clip-rule="evenodd" />
        </svg>
     <?php $__env->endSlot(); ?>

    <div
      role="menu"
      aria-orientation="horizontal"
      aria-labelledby="filter-menu"
    >
        <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => ['filter' => request()->get('filter') ?: []]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'GET','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url()->current())]); ?>
            <?php $__currentLoopData = $table->filters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <h3 class="text-xs uppercase tracking-wide bg-gray-100 dark:bg-gray-800 p-3">
                        <?php echo e($filter->label); ?>

                    </h3>

                    <div class="p-2 dark:bg-gray-600" style="width: 300px !important;">
                        <?php if($filter->type === 'select'): ?>
                            <?php if($filter->remote_url): ?>
                                <?php if (isset($component)) { $__componentOriginal815475b785bcd6f0600c202f93ac344c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal815475b785bcd6f0600c202f93ac344c = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Select::resolve(['name' => 'filter['.e($filter->key).']','placeholder' => ''.$filter->label.'','optionLabel' => ''.e($filter->option_label).'','optionValue' => ''.e($filter->option_value).'','remoteUrl' => ''.$filter->remote_url.'','remoteRoot' => ''.e($filter->remote_root).'','paginated' => ''.$filter->paginated.'','queryBy' => ''.e($filter->queryBy).'','type' => 'relation','multiple' => ''.e($filter->mutli).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@select' => 'table.updateQuery(\'filter['.e($filter->key).']\', $event)']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal815475b785bcd6f0600c202f93ac344c)): ?>
<?php $attributes = $__attributesOriginal815475b785bcd6f0600c202f93ac344c; ?>
<?php unset($__attributesOriginal815475b785bcd6f0600c202f93ac344c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal815475b785bcd6f0600c202f93ac344c)): ?>
<?php $component = $__componentOriginal815475b785bcd6f0600c202f93ac344c; ?>
<?php unset($__componentOriginal815475b785bcd6f0600c202f93ac344c); ?>
<?php endif; ?>
                            <?php else: ?>
                                <?php if (isset($component)) { $__componentOriginal10476663a3271f48a2be05c903a73050 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal10476663a3271f48a2be05c903a73050 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Select::resolve(['choices' => true,'name' => 'filter['.e($filter->key).']','placeholder' => ''.$filter->label.'','multiple' => ''.e($filter->mutli).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Select::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['@change' => 'table.updateQuery(\'filter['.e($filter->key).']\', $event.target.value)']); ?>
                                    <?php $__currentLoopData = $filter->options(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $optionKey => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php if($filter->hasValue() && $filter->value == $optionKey): echo 'selected'; endif; ?> value="<?php echo e($optionKey); ?>">
                                            <?php echo e($option); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $attributes = $__attributesOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__attributesOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal10476663a3271f48a2be05c903a73050)): ?>
<?php $component = $__componentOriginal10476663a3271f48a2be05c903a73050; ?>
<?php unset($__componentOriginal10476663a3271f48a2be05c903a73050); ?>
<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($filter->type === 'bool'): ?>
                            <label class="relative inline-flex items-center cursor-pointer" @click.prevent="table.updateQuery('filter[<?php echo e($filter->key); ?>]', <?php echo e(request()->get('filter') && isset(request()->get('filter')[$filter->key]) && request()->get('filter')[$filter->key] == '1' ? '0' : '1'); ?> )">
                                <input type="checkbox" <?php if(request()->get('filter') && isset(request()->get('filter')[$filter->key]) && request()->get('filter')[$filter->key] == '1'): ?> checked="1" <?php endif; ?> class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200
                                peer-focus:outline-none
                                peer-focus:ring-4
                                peer-focus:ring-primary-300
                                dark:peer-focus:ring-primary-800
                                rounded-full peer
                                dark:bg-gray-700
                                peer-checked:after:translate-x-full
                                peer-checked:after:border-white
                                after:content-['']
                                after:absolute
                                after:top-[2px]
                                after:left-[2px]
                                after:bg-white
                                after:border-gray-200
                                after:border after:rounded-full
                                after:h-5
                                after:w-5
                                after:transition-all
                                dark:border-gray-600
                                peer-checked:bg-blue-600"
                                ></div>
                            </label>
                        <?php endif; ?>
                        <?php if($filter->type === 'date'): ?>
                                <?php if (isset($component)) { $__componentOriginal690b64017277cbdd89bc2d788db21f28 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal690b64017277cbdd89bc2d788db21f28 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form\Input::resolve(['date' => true,'range' => true,'name' => 'filter['.e($filter->key).']'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form\Input::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => ''.e(__('Date Range')).'','@change' => '$event.target.value.includes(\'to\') ? table.updateQuery(\'filter['.e($filter->key).']\', $event.target.value) : null']); ?>
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
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php if (isset($__attributesOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $attributes = $__attributesOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__attributesOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal584f017b33a17ce6e81d05c022b925ba)): ?>
<?php $component = $__componentOriginal584f017b33a17ce6e81d05c022b925ba; ?>
<?php unset($__componentOriginal584f017b33a17ce6e81d05c022b925ba); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/filters.blade.php ENDPATH**/ ?>