<SpladeTransition #default="{ TransitionRoot, TransitionChild }">
    <component
        <?php echo e($attributes
            ->merge($animation->toArray())
            ->mergeVueBinding(':is', $child ? 'TransitionChild' : 'TransitionRoot')
            ->mergeVueBinding(':show', $show)
            ->mergeVueBinding(':appear', $appear)
            ->mergeVueBinding(':unmount', $unmount)
            ->mergeVueBinding('@after-leave', $afterLeave)); ?>

    >
        <?php echo e($slot); ?>

    </component>
</SpladeTransition><?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/functional/transition.blade.php ENDPATH**/ ?>