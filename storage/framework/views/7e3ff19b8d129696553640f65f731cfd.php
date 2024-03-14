<?php if($type === 'icon'): ?>
    <button  <?php echo e($attributes->class([
          'px-2',
        'text-danger-500' => $danger,
        'text-warning-500' => $warning,
        'text-primary-500' => $primary,
        'text-success-500' => $success
])); ?>>
        <?php echo e($label ?: $slot); ?>

    </button>
<?php else: ?>
    <button   <?php echo e($attributes->class([
         'filament-button inline-flex items-center justify-center py-1 gap-1 font-medium rounded-lg border transition-colors',
        'focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset dark:focus:ring-offset-0 min-h-[2.25rem] px-4',
        'text-sm shadow-sm focus:ring-white filament-page-button-action',
        'bg-danger-600 hover:bg-danger-500 focus:bg-danger-700 focus:ring-offset-danger-700 text-white border-transparent' => $danger,
        'bg-warning-600 hover:bg-warning-500 focus:bg-warning-700 focus:ring-offset-warning-700 text-white border-transparent' => $warning,
        'bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 text-white border-transparent' => $primary,
        'bg-success-600 hover:bg-success-500 focus:bg-success-700 focus:ring-offset-success-700 text-white border-transparent' => $success,
        'bg-white hover:bg-gray-50 focus:bg-gray-100 focus:ring-offset-gray-95 text-gray-950 ring-gray-950/10' => $secondary,
])); ?>>
        <?php if(trim($slot)): ?>
            <?php echo e($slot); ?>

        <?php else: ?>
            <div class="flex flex-row items-center justify-center">
                <svg
                        v-if="<?php echo \Illuminate\Support\Js::from($spinner)->toHtml() ?> && form.processing"
                        class="animate-spin mr-3 h-5 w-5 <?php if($secondary): ?> text-gray-700 <?php else: ?> text-white <?php endif; ?>" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                >
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" />
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" />
                </svg>

                <span :class="{ 'opacity-50': form.processing || form.$uploading }">
                <?php echo e($label); ?>

            </span>
            </div>
        <?php endif; ?>
    </button>
<?php endif; ?>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-admin/src/../resources/views/components/submit.blade.php ENDPATH**/ ?>