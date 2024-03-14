<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        \TomatoPHP\TomatoAdmin\Facade\TomatoMenu::register([
            \TomatoPHP\TomatoAdmin\Services\Contracts\Menu::make()
                ->group('App')
                ->label('Document')
                ->icon('bx bx-file-find')
                ->route('admin.documents.index'),
        ]);

        \TomatoPHP\TomatoAdmin\Facade\TomatoMenu::register([
            \TomatoPHP\TomatoAdmin\Services\Contracts\Menu::make()
                ->group('App')
                ->label('Mantenedor')
                ->icon('bx bx-archive')
                ->route('admin.mantenedor.index'),
        ]);
       
    }
}