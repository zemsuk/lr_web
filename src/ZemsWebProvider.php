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
        // $this->LoadViewsFrom(__DIR__.'/views', 'crudapi');
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
        // dd("Hi from Zems Package");
    }
}
