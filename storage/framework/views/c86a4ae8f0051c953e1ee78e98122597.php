<SpladeInput
    <?php echo e($attributes->only(['v-if', 'v-show', 'v-for', 'class'])->class(['hidden' => $isHidden()])); ?>

    :flatpickr="<?php echo \Illuminate\Support\Js::from($flatpickrOptions())->toHtml() ?>"
    :js-flatpickr-options="<?php echo $jsFlatpickrOptions; ?>"
    v-model="<?php echo e($vueModel()); ?>"
    #default="inputScope"
>
    <label class="block">
        <?php echo $__env->renderWhen($label, 'splade::form.label', ['label' => $label], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>

        <div class="flex rounded-lg border border-gray-200 dark:border-gray-700 shadow-sm dark:text-white ">
            <?php if($prepend): ?>
                <span :class="{ 'opacity-50': inputScope.disabled && <?php echo json_encode(!$alwaysEnablePrepend, 15, 512) ?> }" class="inline-flex items-center px-3 ltr:rounded-l-md rtl:rounded-r-md border-t-0 border-b-0 border-l-0 border-gray-300 bg-gray-50 dark:bg-gray-700 dark:text-gray-200 text-gray-50 dark:text-white">
                    <?php echo $prepend; ?>

                </span>
            <?php endif; ?>

            <input <?php echo e($attributes->except(['v-if', 'v-show', 'v-for', 'class'])->class([
                'fi-input block w-full border-none bg-white dark:bg-gray-800 py-1.5 text-base text-gray-950 outline-none transition duration-75' => true,
                'placeholder:text-gray-400  disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)]',
                'disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] dark:text-white dark:placeholder:text-gray-500',
                'dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)]',
                'dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 ps-3 pe-3',
                'focus:ring-2 ring-primary-500 focus:ring-2 focus:ring-primary-500',
                'rounded-lg' => !$append && !$prepend,
                'min-w-0 flex-1 rounded-none' => $append || $prepend,
                'ltr:rounded-l-lg rtl:rounded-r-lg' => $append && !$prepend,
                'ltr:rounded-r-lg rtl:rounded-l-lg' => !$append && $prepend,
            ])->merge([
                'name' => $name,
                'type' => $type,
                'v-model' => $flatpickrOptions() ? null : $vueModel(),
                'data-validation-key' => $validationKey(),
            ])); ?>

            />

            <?php if($append): ?>
                <span :class="{ 'opacity-50': inputScope.disabled && <?php echo json_encode(!$alwaysEnableAppend, 15, 512) ?> }" class="inline-flex items-center px-3 ltr:rounded-r-md rtl:rounded-l-md border-t-0 border-b-0 border-r-0 border-gray-300 bg-gray-50 dark:bg-gray-700 dark:text-gray-200 text-gray-500 dark:text-white">
                    <?php echo $append; ?>

                </span>
            <?php endif; ?>
        </div>
    </label>

    <?php echo $__env->make('splade::form.help', ['help' => $help], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->renderWhen($showErrors, 'splade::form.error', ['name' => $validationKey()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
</SpladeInput>
<?php /**PATH /Users/lramirez/laravel/admindoc/vendor/tomatophp/tomato-splade/src/../resources/views/form/input.blade.php ENDPATH**/ ?>