<?php

namespace TomatoPHP\TomatoAdmin\Facade;

use Illuminate\Support\Facades\Facade;
use TomatoPHP\TomatoAdmin\Services\Contracts\Menu;

/**
 *  @method static \Illuminate\Support\Collection get()
 * @method static \Illuminate\Support\Collection load()
 * @method static groups(array $groups)
 * @method static \Illuminate\Support\Collection loadGroups()
 * @method static \TomatoPHP\TomatoAdmin\Services\TomatoMenu register(array|Menu $item)
 */
class TomatoMenu extends  Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tomato-menu';
    }
}
