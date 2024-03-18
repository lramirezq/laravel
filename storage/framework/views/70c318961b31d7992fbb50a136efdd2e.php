<?php if (isset($component)) { $__componentOriginal35c255806037bacb49330646f09778af = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35c255806037bacb49330646f09778af = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <?php echo e(__('Document')); ?>

     <?php $__env->endSlot(); ?>
   
    
     <?php $__env->slot('buttons', null, []); ?> 
        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['type' => 'link'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['modal' => true,'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.create'))]); ?>
            <?php echo e(trans('tomato-admin::global.crud.create-new')); ?> <?php echo e(__('Document')); ?>

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
     <?php $__env->endSlot(); ?>

    <div class="pb-12">
        <div class="mx-auto">
            <?php if (isset($component)) { $__componentOriginal9e290f7144d9abd075e5cf038a814133 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e290f7144d9abd075e5cf038a814133 = $attributes; } ?>
<?php $component = ProtoneMedia\Splade\Components\Table::resolve(['for' => $table,'striped' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('splade-table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\Splade\Components\Table::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__env->slot('spladeTableCell5f4c2012015962021e6fd02ad9098acd', function ($item, $key) use ($__env) { ?> 
    <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['type' => 'number','value' => $item->DocumentTypeId] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['table' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $attributes = $__attributesOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__attributesOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $component = $__componentOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__componentOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
 <?php }); ?>




<?php $__env->slot('spladeTableCelle122c7cc644b178c0ab9f8096afdf219', function ($item, $key) use ($__env) { ?> 
    


<?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['type' => 'number','value' => $item->NetAmount] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['table' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $attributes = $__attributesOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__attributesOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $component = $__componentOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__componentOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
 <?php }); ?>
<?php $__env->slot('spladeTableCella0f1c2de228cb40714a7b14ca043370e', function ($item, $key) use ($__env) { ?> 
    <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['type' => 'number','value' => $item->FreeAmount] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['table' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $attributes = $__attributesOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__attributesOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $component = $__componentOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__componentOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
 <?php }); ?>
<?php $__env->slot('spladeTableCelle55c8ac41cd9200ae6a329746d4a4985', function ($item, $key) use ($__env) { ?> 
    <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['type' => 'number','value' => $item->TaxAmount] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['table' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $attributes = $__attributesOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__attributesOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $component = $__componentOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__componentOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
 <?php }); ?>
<?php $__env->slot('spladeTableCell6ea5ae17abbd79c2573bbf37aa0fef07', function ($item, $key) use ($__env) { ?> 
    <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['type' => 'number','value' => $item->TotalAmount] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['table' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $attributes = $__attributesOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__attributesOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $component = $__componentOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__componentOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
 <?php }); ?>
<?php $__env->slot('spladeTableCellb2ee912b91d69b435159c7c3f6df7f5f', function ($item, $key) use ($__env) { ?> 
    <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['type' => 'number','value' => $item->Number] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['table' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $attributes = $__attributesOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__attributesOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6517206acc13602280063763835fa4a9)): ?>
<?php $component = $__componentOriginal6517206acc13602280063763835fa4a9; ?>
<?php unset($__componentOriginal6517206acc13602280063763835fa4a9); ?>
<?php endif; ?>
 <?php }); ?>

                <?php $__env->slot('spladeTableCellebb67a4271abe715344471b0f16321f6', function ($item, $key) use ($__env) { ?> 
                    <div class="flex justify-start">
                        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['success' => true,'type' => 'icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(trans('tomato-admin::global.crud.view')).'','modal' => true,'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.show', $item->id))]); ?>
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-eye'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
                        <!--
                        
                        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['warning' => true,'type' => 'icon'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(trans('tomato-admin::global.crud.edit')).'','modal' => true,'href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.edit', $item->id))]); ?>
                            <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-pencil'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['danger' => true,'type' => 'icon','method' => 'delete'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => ''.e(trans('tomato-admin::global.crud.delete')).'','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.destroy', $item->id)),'confirm' => ''.e(trans('tomato-admin::global.crud.delete-confirm')).'','confirm-text' => ''.e(trans('tomato-admin::global.crud.delete-confirm-text')).'','confirm-button' => ''.e(trans('tomato-admin::global.crud.delete-confirm-button')).'','cancel-button' => ''.e(trans('tomato-admin::global.crud.delete-confirm-cancel-button')).'']); ?>

                        <?php if (isset($component)) { $__componentOriginal643fe1b47aec0b76658e1a0200b34b2c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal643fe1b47aec0b76658e1a0200b34b2c = $attributes; } ?>
<?php $component = BladeUI\Icons\Components\Svg::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('heroicon-s-trash'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(BladeUI\Icons\Components\Svg::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-6 w-6']); ?>
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
-->


                    </div>
                 <?php }); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $attributes = $__attributesOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__attributesOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e290f7144d9abd075e5cf038a814133)): ?>
<?php $component = $__componentOriginal9e290f7144d9abd075e5cf038a814133; ?>
<?php unset($__componentOriginal9e290f7144d9abd075e5cf038a814133); ?>
<?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35c255806037bacb49330646f09778af)): ?>
<?php $attributes = $__attributesOriginal35c255806037bacb49330646f09778af; ?>
<?php unset($__attributesOriginal35c255806037bacb49330646f09778af); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35c255806037bacb49330646f09778af)): ?>
<?php $component = $__componentOriginal35c255806037bacb49330646f09778af; ?>
<?php unset($__componentOriginal35c255806037bacb49330646f09778af); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/resources/views/admin/documents/index.blade.php ENDPATH**/ ?>