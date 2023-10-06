<?php

namespace Zems\LrWeb;

use Illuminate\Support\ServiceProvider;

class ZemsWebProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->LoadViewsFrom(__DIR__.'/views', 'lr_web');
        $this->app->singleton(ZemsWeb::class, function(){
            return new ZemsWeb();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route.php');
        $this->publishes([
            __DIR__.'/../assets' => public_path('/'),
        ], 'public');
        // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/restaurant'),
            ], 'assets');*/
        // dd("Hi from Zems Package");
    }
}
