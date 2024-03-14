<TomatoTooltip <?php echo e($attributes); ?> :text="<?php echo \Illuminate\Support\Js::from(trim($text))->toHtml() ?>" :id="<?php echo \Illuminate\Support\Js::from($id)->toHtml() ?>" :position="<?php echo \Illuminate\Support\Js::from($position)->toHtml() ?>">
    <?php echo e($slot); ?>

</TomatoTooltip>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/tooltip.blade.php ENDPATH**/ ?>