<Link <?php echo e($attributes); ?>

    <?php if($data): ?> :data="<?php echo \Illuminate\Support\Js::from($data)->toHtml() ?>" <?php else: ?> :data="<?php echo $jsonData; ?>" <?php endif; ?>
    <?php if($headers): ?> :headers="<?php echo \Illuminate\Support\Js::from($headers)->toHtml() ?>" <?php else: ?> :headers="<?php echo $jsonHeaders; ?>" <?php endif; ?>
>
    <?php echo e($slot); ?>

</Link><?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/functional/link.blade.php ENDPATH**/ ?>