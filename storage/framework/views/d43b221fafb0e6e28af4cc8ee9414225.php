<?php if (isset($component)) { $__componentOriginal00ce306671dddf92a9de0a354be76ef1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00ce306671dddf92a9de0a354be76ef1 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Container::resolve(['label' => ''.e(trans('tomato-admin::global.crud.view')).' '.e(__('Document')).' #'.e($model->id).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-container'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Container::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <!-- Listado de eventos -->
     <h2><?php echo e(__('Eventos')); ?></h2>

            <div>
               <table class="table-events">
                <tr>
                    <td>FECHA</td>
                    <td>EVENTO</td>
                </tr>
                
                <?php $__currentLoopData = $model->eventos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($evento->fecha_evento); ?> </td>
                    <td> <?php echo e($evento->observacion); ?></td>
                </tr>   
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                </table>
            </div>

    <hr/>
    <hr/>

    <?php if(!is_null($model->path_xml) && Storage::exists($model->path_xml)): ?>
    <a href="<?php echo e(route('mostrar-files', ['nombreArchivo' => basename($model->path_xml)])); ?>" target="_blank">Mostrar XML</a>
<?php else: ?>
    <span>Archivo XML no disponible</span>
<?php endif; ?>


<?php if(!is_null($model->path_pdf) && Storage::exists($model->path_pdf)): ?>
    <a href="<?php echo e(route('mostrar-files', ['nombreArchivo' => basename($model->path_pdf)])); ?>" target="_blank">Mostrar PDF</a>
<?php else: ?>
    <span>Archivo PDF no disponible</span>
<?php endif; ?>




   




    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
        

    


          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('UrlJson'),'value' => $model->UrlJson,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('BarCodeText'),'value' => $model->BarCodeText,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('GlobalDocumentId'),'value' => $model->GlobalDocumentId,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('CountryDocumentId'),'value' => $model->CountryDocumentId,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('ExternalId'),'value' => $model->ExternalId,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('CountryId'),'value' => $model->CountryId,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('Date'),'value' => $model->Date,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentTypeId'),'value' => $model->DocumentTypeId,'type' => 'number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentTypeName'),'value' => $model->DocumentTypeName,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('NetAmount'),'value' => $model->NetAmount,'type' => 'number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('FreeAmount'),'value' => $model->FreeAmount,'type' => 'number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('TaxAmount'),'value' => $model->TaxAmount,'type' => 'number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('TotalAmount'),'value' => $model->TotalAmount,'type' => 'number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('CurrencyType'),'value' => $model->CurrencyType,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('SeriesNumber'),'value' => $model->SeriesNumber,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('Series'),'value' => $model->Series,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('Number'),'value' => $model->Number,'type' => 'number'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('NumberStr'),'value' => $model->NumberStr,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentSenderCode'),'value' => $model->DocumentSenderCode,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentSenderName'),'value' => $model->DocumentSenderName,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentReceiverCode'),'value' => $model->DocumentReceiverCode,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentReceiverName'),'value' => $model->DocumentReceiverName,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentFinancialOwnerCode'),'value' => $model->DocumentFinancialOwnerCode,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentFinancialOwnerName'),'value' => $model->DocumentFinancialOwnerName,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('FinancialDate'),'value' => $model->FinancialDate,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('EstimatedPaymentDate'),'value' => $model->EstimatedPaymentDate,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('DocumentTimeStamp'),'value' => $model->DocumentTimeStamp,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('AuthorityTimeStamp'),'value' => $model->AuthorityTimeStamp,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('SyncPoint'),'value' => $model->SyncPoint,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          
          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('TwoCheck'),'value' => $model->TwoCheck,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          
          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('Offers'),'value' => $model->Offers,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

          
          <?php if (isset($component)) { $__componentOriginal6517206acc13602280063763835fa4a9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6517206acc13602280063763835fa4a9 = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Row::resolve(['label' => __('Author'),'value' => $model->Author,'type' => 'string'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Row::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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

         

    </div>
    <div class="flex justify-start gap-2 pt-3">
        <?php if (isset($component)) { $__componentOriginalac1c2c5915b4ce023a8186239e03c2de = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalac1c2c5915b4ce023a8186239e03c2de = $attributes; } ?>
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['warning' => true,'label' => ''.e(__('Edit')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.edit', $model->id))]); ?>
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
<?php $component = TomatoPHP\TomatoAdmin\Views\Button::resolve(['danger' => true,'method' => 'delete','label' => ''.e(__('Delete')).''] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tomato-admin-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(TomatoPHP\TomatoAdmin\Views\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.destroy', $model->id)),'confirm' => ''.e(trans('tomato-admin::global.crud.delete-confirm')).'','confirm-text' => ''.e(trans('tomato-admin::global.crud.delete-confirm-text')).'','confirm-button' => ''.e(trans('tomato-admin::global.crud.delete-confirm-button')).'','cancel-button' => ''.e(trans('tomato-admin::global.crud.delete-confirm-cancel-button')).'']); ?>
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
<?php $component->withAttributes(['href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.documents.index'))]); ?>
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
<?php if (isset($__attributesOriginal00ce306671dddf92a9de0a354be76ef1)): ?>
<?php $attributes = $__attributesOriginal00ce306671dddf92a9de0a354be76ef1; ?>
<?php unset($__attributesOriginal00ce306671dddf92a9de0a354be76ef1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00ce306671dddf92a9de0a354be76ef1)): ?>
<?php $component = $__componentOriginal00ce306671dddf92a9de0a354be76ef1; ?>
<?php unset($__componentOriginal00ce306671dddf92a9de0a354be76ef1); ?>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/resources/views/admin/documents/show.blade.php ENDPATH**/ ?>