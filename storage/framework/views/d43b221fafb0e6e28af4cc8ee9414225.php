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
               <table>
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
    <a href="<?php echo e(route('mostrar-files', ['nombreArchivo' => basename($model->path_xml)])); ?>" target="_blank"><i class="bx bxs-file"></i></a>
<?php else: ?>
    <span>Archivo XML no disponible</span>
<?php endif; ?>


<?php if(!is_null($model->path_pdf) && Storage::exists($model->path_pdf)): ?>
    <a href="<?php echo e(route('mostrar-files', ['nombreArchivo' => basename($model->path_pdf)])); ?>" target="_blank"><i class="bx bxs-file-pdf"></i></a>
<?php else: ?>
    <span>Archivo PDF no disponible</span>
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
<?php /**PATH /Users/lramirez/laravel/admindoc/resources/views/admin/documents/show.blade.php ENDPATH**/ ?>