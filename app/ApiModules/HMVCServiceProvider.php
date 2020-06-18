<?php

namespace App\ApiModules;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;
use App\ApiModules\Users\UserSeviceProvider;
use App\ApiModules\Posts\PostSeviceProvider;

class HMVCServiceProvider extends ServiceProvider
{
    private $configFile = [
        // alias => config file location/path
        'postconfig' => 'Posts/Configs/config.php',
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // register your config file here
        foreach ($this->configFile as $alias => $path) {
            $this->mergeConfigFrom(__DIR__ . "/" . $path, $alias);
        }
        $this->app->register(UserSeviceProvider::class);
        $this->app->register(PostSeviceProvider::class);
    }

    /**
     * Perform post-registration booting of services.
     */
    public function boot()
    {
        $directories = array_map('basename', File::directories(__DIR__));
        foreach ($directories as $moduleName) {
            $this->registerModule($moduleName);
        }
    }

    /**
     * Register module
     *
     * @param $moduleName moduleName
     *
     * @return void
     */
    private function registerModule($moduleName)
    {
        $modulePath = __DIR__ . "/$moduleName/";
        // boot route
        if (File::exists($modulePath . "routes.php")) {
            $this->loadRoutesFrom($modulePath . "routes.php");
        }
        // boot views
        if (File::exists($modulePath . "Views")) {
            $this->loadViewsFrom($modulePath . "Views", $moduleName);
        }

        // boot languages
        if (File::exists($modulePath . "Languages")) {
            $this->loadTranslationsFrom($modulePath . "Languages", $moduleName);
        }
    }
}
