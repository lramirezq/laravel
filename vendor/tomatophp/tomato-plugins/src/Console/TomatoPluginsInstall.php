<?php

namespace TomatoPHP\TomatoPlugins\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use TomatoPHP\ConsoleHelpers\Traits\RunCommand;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoApi;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoArtisan;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoBackup;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoBranches;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoBrowser;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoBuilder;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoCategory;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoChat;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoCms;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoCoupons;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoCrm;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoDusk;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoEcommerce;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoFigma;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoFlutter;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoForms;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoInventory;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoInvoices;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoLocations;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoLogs;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoMenus;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoNotifications;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoOrders;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoPHP;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoPos;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoProducts;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoRoles;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoSaas;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoSections;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoSettings;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoSubscription;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoThemes;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoTranslations;
use TomatoPHP\TomatoPlugins\Console\Packages\TomatoWallet;
use function Laravel\Prompts\confirm;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\select;

class TomatoPluginsInstall extends Command
{
    use RunCommand;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'tomato:plugins';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install plugins for tomato framework';


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pluginsScan = File::files(__DIR__ .'/Packages');
        $pluginsNamesCollection = collect($pluginsScan)->filter(function ($item){
            if(!Str::of($item->getFileName())->contains('TomatoPackage')){
                return $item;
            }
        });
        $pluginsNames = [];
        foreach ($pluginsNamesCollection as $pluginNameItem){
            $className = Str::of($pluginNameItem->getFileName())->remove('.php')->toString();
            $getClass = app('TomatoPHP\\TomatoPlugins\\Console\\Packages\\' . $className);
            $pluginsNames[$className] = $getClass->getLabel();
        }
        $blueprintScan = File::files(__DIR__ .'/Blueprints');
        $blueprintNamesCollection = collect($blueprintScan)->filter(function ($item){
            if(!Str::of($item->getFileName())->contains('Blueprint')){
                return $item;
            }
        });
        $blueprintNames = [];
        foreach ($blueprintNamesCollection as $bluePrintNameItem){
            $className = Str::of($bluePrintNameItem->getFileName())->remove('.php')->toString();
            $getClass = app('TomatoPHP\\TomatoPlugins\\Console\\Blueprints\\' . $className);
            $blueprintNames[$className] = $getClass->getLabel();
        }
        $all = confirm('Do You went to install all plugins for tomato framework?');
        if ($all) {
            (new TomatoApi())->install();
            (new TomatoPHP())->install();
            (new TomatoRoles())->install();
            (new TomatoSettings())->install();
            (new TomatoTranslations())->install();
            (new TomatoLocations())->install();
            (new TomatoNotifications())->install();
            (new TomatoCategory())->install();
            (new TomatoMenus())->install();
            (new TomatoCrm())->install();
            (new TomatoWallet())->install();
            (new TomatoCms())->install();
            (new TomatoProducts())->install();
            (new TomatoBranches())->install();
            (new TomatoCoupons())->install();
            (new TomatoOrders())->install();
            (new TomatoInventory())->install();
            (new TomatoInvoices())->install();
            (new TomatoEcommerce())->install();
            (new TomatoThemes())->install();
            (new TomatoSections())->install();
            (new TomatoPos())->install();
            (new TomatoChat())->install();
            (new TomatoForms())->install();
            (new TomatoFlutter())->install();
            (new TomatoBuilder())->install();
            (new TomatoBackup())->install();
            (new TomatoLogs())->install();
            (new TomatoBrowser())->install();
            (new TomatoArtisan())->install();
            (new TomatoDusk())->install();
            (new TomatoFigma())->install();
            (new TomatoSaas())->install();
            (new TomatoSubscription())->install();
            \Laravel\Prompts\info('🍅 All Tomato Framework Plugins Has Been installed successfully.');
        } else {
            $installBluePrint = confirm('Do You went to install a blueprint for your project?');
            if ($installBluePrint) {
                $blueprint = select(
                    label: 'Select Blueprint you when to create',
                    options: $blueprintNames,
                    required: true
                );
                app('TomatoPHP\\TomatoPlugins\\Console\\Blueprints\\' . $blueprint)->install();
            }
            else {
                $installSelectedPlugins = confirm('Do You went to install a selected plugins for your project?');
                if($installSelectedPlugins){
                    $selectedPlugins = multiselect(
                        label:'Select plugins you went to install',
                        options: $pluginsNames,
                        required: true
                    );

                    foreach ($selectedPlugins as $pluginItem){
                        app('TomatoPHP\\TomatoPlugins\\Console\\Packages\\' . $pluginItem)->install();
                    }
                }
            }
        }

        \Laravel\Prompts\info('🍅 Thanks for using Tomato Plugins & TomatoPHP framework');
        \Laravel\Prompts\info('💼 Join support server on discord https://discord.gg/VZc8nBJ3ZU');
        \Laravel\Prompts\info('📄 You can check docs here https://docs.tomatophp.com');
        \Laravel\Prompts\info('⭐ please gave us a start on any repo if you like it https://github.com/tomatophp');
        \Laravel\Prompts\info('🤝 sponser us here https://github.com/sponsors/3x1io');
    }
}

