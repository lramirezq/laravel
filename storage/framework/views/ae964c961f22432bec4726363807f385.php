<?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getSidebarTop(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<!-- Search -->
<div class="my-4 px-6" v-show="!data.makeMenuMin">
    <div class="relative">
        <div class="filament-global-search-input">
            <label for="globalSearchInput" class="sr-only">
                <?php echo e(trans('tomato-admin::global.search')); ?>

            </label>

            <div class="relative group max-w-md">
                <span class="absolute inset-y-0 left-0 flex items-center justify-center w-10 h-10 text-gray-500 pointer-events-none group-focus-within:text-primary-500 dark:text-gray-400">
                    <svg  class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                    <svg v-if="false" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="animate-spin w-5 h-5">
                        <path opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="currentColor"></path>
                        <path d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z" fill="currentColor"></path>
                    </svg>
                </span>
                <?php if (isset($component)) { $__componentOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8070f1a8f8bb4059ff6ff5b9ed074a0a = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Form::resolve(['default' => [
                    'filter' => [
                        'global' => request()->get('filter')['global'] ?? null
                    ]
                ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['method' => 'GET','action' => ''.e(config('tomato-admin.global_search_route') ?: url()->current()).'']); ?>
                    <input  id="globalSearchInput" v-model="form.filter['global']" placeholder="<?php echo e(trans('tomato-admin::global.search')); ?>" type="search" autocomplete="off" class="block w-full h-10 pl-10 bg-gray-400/10 text-gray-100 placeholder-gray-200 border-transparent transition duration-75 rounded-lg focus:bg-gray-800 focus:placeholder-gray-600 focus:border-primary-500 focus:ring-1 focus:ring-inset focus:ring-primary-500 dark:bg-gray-700 dark:text-gray-200 dark:placeholder-gray-600">
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
        </div>
    </div>
</div>
<div v-show="!data.makeMenuMin" class="my-2 border-t border-gray-700"></div>
<?php if (isset($component)) { $__componentOriginal9201898bb20e70f80043aa5944b64393 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9201898bb20e70f80043aa5944b64393 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.profile.edit')).'','class' => 'px-4 py-3 flex justify-start gap-4','v-show' => '!data.makeMenuMin']); ?>
    <?php
        $grav_url = auth()->user()->profile_photo_url;
    ?>
    <div>
        <div class="w-14 h-14 rounded-full bg-gray-200 bg-cover bg-center dark:bg-gray-900" style="background-image: url('<?php echo e($grav_url); ?>')">
        </div>
    </div>
    <div class="flex flex-col items-center justify-center">
        <div>
            <h6 class="text-lg text-white font-bold"><?php echo e(auth('web')->user()->name); ?></h6>
            <p class="text-sm text-gray-300"><?php echo e(auth('web')->user()->email); ?></p>
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
<div v-show="!data.makeMenuMin" class="my-2 border-t border-gray-700"></div>
<div>
    <div class="text-sm">
        <div>
            <Link
                href="<?php echo e(route('admin')); ?>"
                class="
                <?php if(request()->routeIs('admin')): ?>
                    text-white font-bold
                <?php else: ?>
                    text-gray-400 hover:bg-gray-500/5 focus:bg-gray-500/5 dark:text-gray-300 dark:hover:bg-gray-700
                <?php endif; ?>
                    flex items-center justify-center w-full py-3 font-medium transition" :class="{'gap-3 px-4': !data.makeMenuMin}">

                <div v-if="data.makeMenuMin">
                    <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['left' => app()->getLocale() === 'ar','right' => app()->getLocale() !== 'ar','text' => trans('tomato-admin::global.dashboard')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <i class="w-5 h-5 shrink-0 bx bxs-home" style="font-size: 20px"></i>
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
                </div>
                <div v-else>
                    <i class="w-5 h-5 shrink-0 bx bxs-home" style="font-size: 20px"></i>
                </div>


                <div class="flex-1 text-xs font-bold" v-show="!data.makeMenuMin">
                    <span>
                        <?php echo e(trans("tomato-admin::global.dashboard")); ?>

                    </span>
                </div>
            </Link>
        </div>
    </div>
    <div v-show="data.makeMenuMin" class="my-2 border-t border-gray-700"></div>
</div>

<div>
    <?php if(config('tomato-admin.menu_provider')): ?>
        <?php echo config('tomato-admin.menu_provider')::render(); ?>

    <?php elseif(config('tomato-admin.menu_file')): ?>
        <?php echo $__env->make(config('tomato-admin.menu_file'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php $counter = 0; ?>
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(isset($menu['menu']) ? count($menu['menu']) === 1 : count($menu) === 1): ?>
                <?php $item = isset($menu['menu']) ? $menu['menu'][0] : $menu[0]; ?>
                <div class="filament-sidebar-item"  title="<?php echo e($item->label); ?>" style="color: <?php echo e($item->color); ?> !important;">
                    <?php if($item->target === '_blank'): ?>
                        <a
                            target="_blank"
                            href="<?php echo e($item->route ? route($item->route) : $item->url); ?>"
                            class="
                            <?php if($item->route && request()->routeIs($item->route)): ?>
                                text-white
                            <?php else: ?>
                                hover:bg-gray-500/5 focus:bg-gray-500/5 dark:text-gray-300 dark:hover:bg-gray-700
                            <?php endif; ?>
                          flex items-center justify-center w-full gap-3 px-4 py-2 font-medium transition rounded-lg">

                            <div v-if="data.makeMenuMin">
                                <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['left' => app()->getLocale() === 'ar','right' => app()->getLocale() !== 'ar','text' => $item->label] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                    <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
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
                            </div>
                            <div v-else>
                                <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
                            </div>

                            <div class="flex flex-1" v-show="!data.makeMenuMin" style="">
                                <span>
                                    <?php echo e($item->label); ?>

                                </span>
                                <?php if($item->badge): ?>
                                    <span
                                        class="inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal text-primary-700 bg-primary-500/10 dark:text-primary-500">
                                    <?php echo e($item->badge); ?>

                                </span>
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php else: ?>
                        <Link
                            href="<?php echo e($item->route ? route($item->route) : $item->url); ?>"
                            class="
                            <?php if($item->route && request()->routeIs($item->route)): ?>
                                text-white font-bold
                            <?php else: ?>
                                text-gray-400 hover:bg-gray-500/5 focus:bg-gray-500/5 dark:text-gray-300 dark:hover:bg-gray-700
                            <?php endif; ?>
                           flex items-center justify-center w-full gap-3  py-3 font-medium transition" :class="{'gap-3 px-4': !data.makeMenuMin}">


                        <div v-if="data.makeMenuMin">
                            <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['left' => app()->getLocale() === 'ar','right' => app()->getLocale() !== 'ar','text' => $item->label] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
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
                        </div>
                        <div v-else>
                            <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
                        </div>

                        <div class="flex-1 text-xs font-bold" v-show="!data.makeMenuMin" style="">
                                <span>
                                    <?php echo e($item->label); ?>

                                </span>
                            <?php if($item->badge): ?>
                                <span
                                    class="inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal text-primary-700 bg-primary-500/10 dark:text-primary-500">
                                    <?php echo e($item->badge); ?>

                                </span>
                            <?php endif; ?>
                        </div>
                        </Link>
                    <?php endif; ?>
                </div>
                <div v-show="data.makeMenuMin" class="my-2 border-t border-gray-700"></div>
            <?php else: ?>
                <button @click.prevent="
            for(let i in data.asideMenuGroup){
                if(i !== '<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>'){
                    data.asideMenuGroup[i] = false;
                }
            };
            data.asideMenuGroup['<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>'] =
            !data.asideMenuGroup['<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>']"
                        v-show="!data.makeMenuMin"
                        class="w-full dark:text-gray-300 flex items-center justify-between gap-3 px-4 py-3 font-medium transition"
                        :class="{
                        'bg-gray-900 hover:bg-gray-800 text-white': data.asideMenuGroup['<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>'],
                        'text-gray-400 hover:bg-gray-500/5 dark:hover:bg-gray-700 focus:bg-gray-500/5': !data.asideMenuGroup['<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>'],
                    }">
                    <div class="flex items-center gap-4">
                        <i class="w-5 h-5 shrink-0 bx <?php if(isset($menu['icon'])): ?> <?php echo e($menu['icon']); ?> <?php else: ?> bxs-category <?php endif; ?>" style="font-size: 20px"></i>

                        <p class="flex-1 text-xs font-bold">
                            <?php echo e(isset($menu['label']) ? $menu['label'] : $key); ?>

                        </p>
                    </div>

                    <svg v-if="data.asideMenuGroup" v-show="data.asideMenuGroup['<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>']"
                         class="w-3 h-3 text-gray-600 transition-all dark:text-gray-300" xmlns="http://www.w3.org/2000/svg"
                         fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                    <svg v-if="data.asideMenuGroup" v-show="!data.asideMenuGroup['<?php echo e(str_replace(" ", "_", isset($menu['key']) ?$menu['key'] : $key)); ?>']"
                         class="w-3 h-3 text-gray-600 transition-all rotate-180 dark:text-gray-300"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                         aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>

                <div>
                    <div
                        v-show="data.asideMenuGroup && data.asideMenuGroup['<?php echo e(str_replace(' ', '_', isset($menu['key']) ?$menu['key'] : $key)); ?>'] || data.makeMenuMin" class="text-sm" :class="{'bg-gray-950':!data.makeMenuMin}">
                        <?php $__currentLoopData = isset($menu['menu']) ? $menu['menu'] : $menu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="filament-sidebar-item"  title="<?php echo e($item->label); ?>" style="color: <?php echo e($item->color); ?> !important;">
                                <?php if($item->target === '_blank'): ?>
                                    <a
                                        target="_blank"
                                        href="<?php echo e($item->route ? route($item->route) : $item->url); ?>"
                                        :class="{
                                    'ltr:pl-10 rtl:pr-10': !data.makeMenuMin
                                }"
                                        class="
                            <?php if($item->route && request()->routeIs($item->route)): ?>
                                text-white font-bold
                            <?php else: ?>
                                text-gray-400 hover:bg-gray-500/5 focus:bg-gray-500/5 dark:text-gray-300 dark:hover:bg-gray-700
                            <?php endif; ?>
                           flex items-center justify-center w-full gap-3  py-3 font-medium transition">

                                        <div v-if="data.makeMenuMin">
                                            <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['left' => app()->getLocale() === 'ar','right' => app()->getLocale() !== 'ar','text' => $item->label] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                                <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
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
                                        </div>
                                        <div v-else>
                                            <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
                                        </div>

                                        <div class="flex-1 text-xs font-bold" v-show="!data.makeMenuMin" style="">
                                <span>
                                    <?php echo e($item->label); ?>

                                </span>
                                            <?php if($item->badge): ?>
                                                <span
                                                    class="inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal text-primary-700 bg-primary-500/10 dark:text-primary-500">
                                    <?php echo e($item->badge); ?>

                                </span>
                                            <?php endif; ?>
                                        </div>
                                    </a>
                                <?php else: ?>
                                    <Link
                                        href="<?php echo e($item->route ? route($item->route) : $item->url); ?>"
                                        :class="{
                                    'ltr:pl-10 rtl:pr-10': !data.makeMenuMin
                                }"
                                        class="
                            <?php if($item->route && request()->routeIs($item->route)): ?>
                                text-white font-bold
                            <?php else: ?>
                                text-gray-400 hover:bg-gray-500/5 focus:bg-gray-500/5 dark:text-gray-300 dark:hover:bg-gray-700
                            <?php endif; ?>
                           flex items-center justify-center w-full gap-3  py-2 font-medium transition">


                                    <div v-if="data.makeMenuMin">
                                        <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['left' => app()->getLocale() === 'ar','right' => app()->getLocale() !== 'ar','text' => $item->label] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                            <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
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
                                    </div>
                                    <div v-else>
                                        <i class="w-5 h-5 shrink-0 <?php echo e($item->icon); ?>" style="font-size: 20px"></i>
                                    </div>

                                    <div class="flex-1 text-xs font-bold" v-show="!data.makeMenuMin" style="">
                                <span>
                                    <?php echo e($item->label); ?>

                                </span>
                                        <?php if($item->badge): ?>
                                            <span
                                                class="inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal text-primary-700 bg-primary-500/10 dark:text-primary-500">
                                    <?php echo e($item->badge); ?>

                                </span>
                                        <?php endif; ?>
                                    </div>
                                    </Link>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <?php if($counter !== count($menus)-1): ?>
                    <div v-show="data.makeMenuMin" class="my-2 border-t border-gray-700"></div>
                <?php endif; ?>
                <?php $counter++; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>

<div class="flex flex-col justifiy-end">
    <div>
        <div class="my-2 border-t border-gray-700"></div>
        <div class="text-sm">
            <div>
                <Link
                    method="POST"
                    href="<?php echo e(route('logout')); ?>"
                    class="
                    text-danger-400 hover:bg-gray-500/5 focus:bg-gray-500/5
                    flex items-center justify-center w-full py-3 font-medium transition" :class="{'gap-3 px-4': !data.makeMenuMin}">


                <div v-if="data.makeMenuMin">
                    <?php if (isset($component)) { $__componentOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b74f2aa77021df9d9382ff0c1cf5256 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Tooltip::resolve(['left' => app()->getLocale() === 'ar','right' => app()->getLocale() !== 'ar','text' => __('Logout')] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-tooltip'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Tooltip::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <i class="w-5 h-5 shrink-0 bx bx-log-out" style="font-size: 20px"></i>
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
                </div>
                <div v-else>
                    <i class="w-5 h-5 shrink-0 bx bx-log-out" style="font-size: 20px"></i>
                </div>

                <div class="flex flex-1" v-show="!data.makeMenuMin">
                    <span>
                        <?php echo e(__("Logout")); ?>

                    </span>
                </div>
                </Link>
            </div>
        </div>
    </div>
    <?php $__currentLoopData = \TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getSidebarBottom(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $__env->make($item, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/layouts/includes/menu.blade.php ENDPATH**/ ?>