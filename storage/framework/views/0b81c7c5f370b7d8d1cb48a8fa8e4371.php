<?php if($customBody): ?>
    <?php echo e($slot); ?>

<?php else: ?>
<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto">
        <div class="py-2 align-middle inline-block min-w-full sm:px-px">
            <div class="shadow-sm relative border border-gray-200 dark:border-gray-700">
                <?php echo e($slot); ?>

            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/table/wrapper.blade.php ENDPATH**/ ?>