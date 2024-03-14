<div class="h-screen flex flex-col justify-center items-center gap-4 bg-gray-900">
    <?php if (isset($component)) { $__componentOriginal9201898bb20e70f80043aa5944b64393 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9201898bb20e70f80043aa5944b64393 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Link::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Link::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('login'))]); ?>
        <?php if (isset($component)) { $__componentOriginal2b5fd8fda04af3f1a982046b029966ec = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2b5fd8fda04af3f1a982046b029966ec = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\ApplicationLogo::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-application-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\ApplicationLogo::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-16 h-16']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2b5fd8fda04af3f1a982046b029966ec)): ?>
<?php $attributes = $__attributesOriginal2b5fd8fda04af3f1a982046b029966ec; ?>
<?php unset($__attributesOriginal2b5fd8fda04af3f1a982046b029966ec); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2b5fd8fda04af3f1a982046b029966ec)): ?>
<?php $component = $__componentOriginal2b5fd8fda04af3f1a982046b029966ec; ?>
<?php unset($__componentOriginal2b5fd8fda04af3f1a982046b029966ec); ?>
<?php endif; ?>
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
    <div class="text-center">
        <h1 class="font-bold text-3xl text-white"><?php echo e(config('app.name')); ?></h1>
        <p class="text-gray-400 text-lg"> <b>Laravel</b> v<?php echo e(Illuminate\Foundation\Application::VERSION); ?> (PHP v<?php echo e(PHP_VERSION); ?>)</p>
        <p class="text-gray-400"><b>Tomato</b> v<?php echo e(\Composer\InstalledVersions::getVersion('tomatophp/tomato-admin')); ?> | <a target="_blank" href="https://docs.tomatophp.com" class="underline"><i class="bx bx-file text-md text-green-500"></i> Docs</a> | <a target="_blank" href="https://discord.gg/VZc8nBJ3ZU" class="underline"><i class="bx bxl-discord text-md  text-primary-500"></i> Discord</a> | <a target="_blank" href="https://github.com/sponsors/3x1io" class="underline"><i class="bx bxs-heart text-danger-500 text-md"></i> Sponsor</a> | <a target="_blank" href="https://github.com/tomatophp" class="underline"><i class="bx bxl-github text-white text-md"></i> GitHub</a></p>
    </div>
</div>
<?php /**PATH /Users/lramirez/laravel/admindoc/resources/views/welcome.blade.php ENDPATH**/ ?>