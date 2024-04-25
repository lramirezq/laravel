<footer class="bg-white dark:bg-gray-800 dark:border-gray-700 p-4 border-t border-gray-200 flex flex-col  items-center justify-center">
    @if(count(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getFooter()))

    @foreach(\TomatoPHP\TomatoAdmin\Facade\TomatoSlot::getFooter() as $item)
        @include($item)
    @endforeach

    @else

    <div>
 
        <span class="text-sm">
            Creado By Luis Ramirez Queupul
        </span>
    </div>
    <div class="ml-4 text-center text-xs text-gray-500 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>

    @endif
</footer>
