<header class="
                    filament-main-topbar
                    sticky
                    top-0
                    z-10
                    flex
                    h-16
                    w-full
                    shrink-0
                    items-center
                    border-b
                    border-gray-100
                    bg-white
                    dark:bg-gray-800
                    dark:border-gray-700
                ">
    <div class="flex items-center w-full px-2 sm:px-4 md:px-6 lg:px-8">
        <!-- hide button -->
        <button
                class="
                            filament-sidebar-open-button
                            shrink-0
                            flex
                            items-center
                            justify-center
                            w-10
                            h-10
                            transition
                            text-primary-500
                            rounded-full
                            hover:bg-gray-500/5
                            focus:bg-primary-500/10
                            focus:outline-none
                            lg:z-10
                            lg:hover:bg-white
                            lg:focus:bg-white
                            lg:hover:text-gray-600
                            lg:focus:text-gray-600
                            lg:-ml-[44px]
                            lg:w-6
                            lg:h-6
                            lg:text-gray-500
                            lg:bg-white
                            lg:shadow
                            lg:dark:bg-gray-900
                            lg:dark:hover:text-gray-400
                            lg:dark:focus:text-gray-400
                            lg:mr-4
                            rtl:lg:ml-4
                            rtl:lg:-mr-[44px]

                        "

        >
            <div
                    @click.prevent="data.makeMenuMin = !data.makeMenuMin"
                    class="relative lg:absolute invisible lg:visible"
            >
                <?php if(app()->getLocale() === 'ar'): ?>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-small-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-primary-500','v-if' => '!data.makeMenuMin']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-small-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-primary-500','v-else' => true]); ?>
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
                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-small-left'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-primary-500','v-if' => '!data.makeMenuMin']); ?>
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
                    <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-arrow-small-right'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-4 h-4 text-primary-500','v-else' => true]); ?>
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
                <?php endif; ?>
            </div>

            <div
                    class="relative lg:absolute visible lg:invisible"
                    @click.prevent="data.makeMenuHide = !data.makeMenuHide"
            >
                <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-bars-3'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6']); ?>
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
            </div>
        </button>
        <button
            class="
                  flex
                            items-center
                            justify-center
                            mx-2
                            lg:mx-0
                        ">
            <i class="bx bx-fullscreen" id="fullScreen"></i>
        </button>

        <?php if(\Laravel\Jetstream\Jetstream::hasTeamFeatures()): ?>
            <div class="flex flex-col justify-center items-center mx-4">
                <?php if (isset($component)) { $__componentOriginal2c282bfe489689f4f75d029a5a1cddf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Dropdown::resolve(['id' => 'team-dropdown'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                     <?php $__env->slot('button', null, []); ?> 
                    <span class="inline-flex rounded-md">
                        <button type="button" class="flex gap-2 items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:bg-gray-50 dark:focus:bg-gray-700 active:bg-gray-50 dark:active:bg-gray-700 transition ease-in-out duration-150">
                            <div>
                                <?php if(auth()->user()->currentTeam): ?>
                                    <?php echo e(auth()->user()->currentTeam?->name); ?>

                                <?php else: ?>
                                    <?php echo e(__('No Team')); ?>

                                <?php endif; ?>
                            </div>

                            <div>
                                <svg class="ml-2 rtl:mr-2 rtl:-ml-0.5 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                            </svg>
                            </div>
                        </button>
                    </span>
                     <?php $__env->endSlot(); ?>

                    <?php if(auth()->user()->currentTeam): ?>
                        <!-- Team Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            <?php echo e(__('Manage Team')); ?>

                        </div>


                        <!-- Team Settings -->
                        <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['type' => 'link','icon' => 'bx bxs-cog','label' => __('Team Settings')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.teams.show', auth()->user()->currentTeam))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', Laravel\Jetstream\Jetstream::newTeamModel())): ?>
                            <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['type' => 'link','icon' => 'bx bxs-plus-circle','label' => __('Create New Team')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.teams.create'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
                        <?php endif; ?>
                        <div class="border-t border-gray-200 dark:border-gray-600" />
                        <!-- Team Switcher -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            <?php echo e(__('Switch Teams')); ?>

                        </div>

                        <?php $__currentLoopData = auth()->user()->allTeams(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => ['team_id' => $team->getKey()]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'PUT','action' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.current-team.update'))]); ?>
                                <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['type' => 'button','icon' => $team->is(auth()->user()->currentTeam) ? 'bx bxs-check-circle' : 'bx bx-check-circle','label' => $team->name] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
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
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <!-- Team Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            <?php echo e(__('Manage Team')); ?>

                        </div>

                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create', Laravel\Jetstream\Jetstream::newTeamModel())): ?>
                            <?php if (isset($component)) { $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\DropdownItem::resolve(['type' => 'link','icon' => 'bx bxs-plus-circle','label' => __('Create New Team')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\DropdownItem::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.teams.create'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $attributes = $__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__attributesOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b)): ?>
<?php $component = $__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b; ?>
<?php unset($__componentOriginal3cf2b8531ff97f29214a0bfd71e65a4b); ?>
<?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0)): ?>
<?php $attributes = $__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0; ?>
<?php unset($__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c282bfe489689f4f75d029a5a1cddf0)): ?>
<?php $component = $__componentOriginal2c282bfe489689f4f75d029a5a1cddf0; ?>
<?php unset($__componentOriginal2c282bfe489689f4f75d029a5a1cddf0); ?>
<?php endif; ?>
            </div>
        <?php endif; ?>

        <div class="flex items-center justify-between flex-1">

            <!-- breadcrumbs -->
            <div class="flex-1">
                <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getNavLeftSide(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>




            
            <div>
                <div class="filament-notifications pointer-events-none fixed inset-4 z-50 mx-auto flex justify-end gap-3 items-end flex-col-reverse" role="status">
                </div>

                <!-- Notifications -->
                <div>
                    <!-- Open Notification Modal -->
                    <div
                        title="filament::layout.database_notifications"
                        type="button"
                        class="filament-icon-button flex items-center justify-center rounded-full relative hover:bg-gray-500/5 focus:outline-none text-primary-500 focus:bg-primary-500/10 dark:hover:bg-gray-300/5 w-10 h-10 ml-4 -mr-1">
                            <span class="sr-only">

                            </span>

                        <?php $langs = collect(config('tomato-admin.langs')) ?>
                        <?php if (isset($component)) { $__componentOriginal2c282bfe489689f4f75d029a5a1cddf0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Dropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Dropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                             <?php $__env->slot('button', null, []); ?> 
                                <div>
                                    <?php echo e(isset($langs->where('key', app()->getLocale())->first()['flag']) ? $langs->where('key', app()->getLocale())->first()['flag'] : __('Lang')); ?>

                                </div>
                             <?php $__env->endSlot(); ?>

                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <Link href="<?php echo e(route('admin.lang', ['lang' => $lang])); ?>" method="POST"  class="<?php if($lang['key'] === app()->getLocale()): ?>  text-primary-600 dark:text-primary-200 hover:text-gray-500  <?php else: ?> text-gray-600 dark:text-gray-200 hover:text-primary-500 <?php endif; ?> whitespace-nowrap block w-full px-4 py-2  text-sm leading-5 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-800 transition duration-150 ease-in-out">
                                <div class="flex justify-start gap-2">
                                    <div class="flex flex-col items-center justify-center">
                                        <?php echo e($lang['flag']); ?>

                                    </div>
                                    <div>
                                        <?php echo e($lang['label'][app()->getLocale()]); ?>

                                    </div>
                                </div>
                                </Link>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0)): ?>
<?php $attributes = $__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0; ?>
<?php unset($__attributesOriginal2c282bfe489689f4f75d029a5a1cddf0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2c282bfe489689f4f75d029a5a1cddf0)): ?>
<?php $component = $__componentOriginal2c282bfe489689f4f75d029a5a1cddf0; ?>
<?php unset($__componentOriginal2c282bfe489689f4f75d029a5a1cddf0); ?>
<?php endif; ?>
                    </div>
                </div>

                <div></div>
            </div>


            
            <div>
                <div class="filament-notifications pointer-events-none fixed inset-4 z-50 mx-auto flex justify-end gap-3 items-end flex-col-reverse" role="status">
                </div>

                <!-- Notifications -->
                <div>
                    <!-- Open Notification Modal -->
                    <button
                        @click.prevent="data.dark = !data.dark; $splade.refresh()"
                        title="filament::layout.database_notifications"
                        type="button"
                        class="filament-icon-button flex items-center justify-center rounded-full relative hover:bg-gray-500/5 focus:outline-none text-primary-500 focus:bg-primary-500/10 dark:hover:bg-gray-300/5 w-10 h-10 ml-4 -mr-1">
                            <span class="sr-only">

                            </span>

                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-sun'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-if' => 'data.dark','class' => 'filament-icon-button-icon w-5 h-5']); ?>
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
                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-moon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['v-else' => true,'class' => 'filament-icon-button-icon w-5 h-5']); ?>
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
                    </button>
                </div>

                <div></div>
            </div>


            <?php if(class_exists(\TomatoPHP\TomatoNotifications\Models\UserNotification::class)): ?>
            <!-- Notifications -->
            <div>
                <div class="filament-notifications pointer-events-none fixed inset-4 z-50 mx-auto flex justify-end gap-3 items-end flex-col-reverse" role="status">
                </div>

                <!-- Notifications -->
                <div>
                    <!-- Open Notification Modal -->
                    <Link modal href="<?php echo e(route('admin.notifications.index')); ?>" class="inline-block">
                        <button
                            title="filament::layout.database_notifications"
                            type="button"
                            class="filament-icon-button flex items-center justify-center rounded-full relative hover:bg-gray-500/5 focus:outline-none text-primary-500 focus:bg-primary-500/10 dark:hover:bg-gray-300/5 w-10 h-10 ml-4 -mr-1">
                            <span class="sr-only">

                            </span>

                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-o-bell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'filament-icon-button-icon w-5 h-5']); ?>
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

                            <span class="filament-icon-button-indicator absolute rounded-full text-xs inline-block w-4 h-4 -top-0.5 -right-0.5 bg-primary-500/10">
                                <?php
                                    $notifications = \TomatoPHP\TomatoNotifications\Models\UserNotification::query()
                                            ->where('model_type', 'App\Models\User')
                                            ->where('model_id', auth('web')->user()->id)
                                            ->whereDoesntHave('userRead')
                                            ->get()
                                ?>
                                <?php echo e($notifications->count()); ?>

                            </span>
                        </button>
                    </Link>
                </div>

                <div></div>
            </div>
            <?php endif; ?>
            <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getNavBeforeUserDropdown(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if (isset($component)) { $__componentOriginalc716768e11ac0e29537b0dd8ab812120 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc716768e11ac0e29537b0dd8ab812120 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\ProfileDropdown::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-profile-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\ProfileDropdown::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc716768e11ac0e29537b0dd8ab812120)): ?>
<?php $attributes = $__attributesOriginalc716768e11ac0e29537b0dd8ab812120; ?>
<?php unset($__attributesOriginalc716768e11ac0e29537b0dd8ab812120); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc716768e11ac0e29537b0dd8ab812120)): ?>
<?php $component = $__componentOriginalc716768e11ac0e29537b0dd8ab812120; ?>
<?php unset($__componentOriginalc716768e11ac0e29537b0dd8ab812120); ?>
<?php endif; ?>

            <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getNavAfterUserDropdown(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</header>
<?php if (isset($component)) { $__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Script::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-script'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Script::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    let docElm = document.getElementById("appBody");
    let button = document.querySelector('#fullScreen');
    button.addEventListener('click', function () {
        let isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
        (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
        (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
        (document.msFullscreenElement && document.msFullscreenElement !== null);
        if (!isInFullScreen) {
            button.classList.remove('bx-fullscreen');
            button.classList.add('bx-exit-fullscreen');
            if (docElm.requestFullscreen) {
                docElm.requestFullscreen();
            } else if (docElm.mozRequestFullScreen) {
                docElm.mozRequestFullScreen();
            } else if (docElm.webkitRequestFullScreen) {
                docElm.webkitRequestFullScreen();
            } else if (docElm.msRequestFullscreen) {
                docElm.msRequestFullscreen();
            }
        } else {
            if(document){
                button.classList.add('bx-fullscreen');
                button.classList.remove('bx-exit-fullscreen');
            if (document.exitFullscreen) {
            document.exitFullscreen();
            } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
            } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
            } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
            }
            }
        }

    });



 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b)): ?>
<?php $attributes = $__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b; ?>
<?php unset($__attributesOriginal85e14d8f2eb9be41c54f3ef4caf4b63b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b)): ?>
<?php $component = $__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b; ?>
<?php unset($__componentOriginal85e14d8f2eb9be41c54f3ef4caf4b63b); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/layouts/includes/nav.blade.php ENDPATH**/ ?>