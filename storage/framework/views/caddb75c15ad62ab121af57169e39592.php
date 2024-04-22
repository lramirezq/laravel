<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-/LLbNyQx1ck3gGA6B+BWu05l7IOWCYE+6rYnau+kmmGkS9bY0cwVstMLxUmXz2b3ySP2VqnjX/XdHjrM3GdN3w==" crossorigin="anonymous">

        <?php echo e(app('laravel-splade-seo')->renderHead()); ?>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    </head>
    <body class="font-sans antialiased">
        <div id="app" data-components="<?php echo e(json_encode($components)); ?>" data-html="<?php echo e(json_encode($html)); ?>" data-dynamics="<?php echo e(json_encode($dynamics)); ?>" data-splade="<?php echo e(json_encode($splade)); ?>">
<?php echo $ssrBody; ?>

</div>
    </body>
</html>
<?php /**PATH /Users/lramirez/laravel/admindoc/resources/views/root.blade.php ENDPATH**/ ?>