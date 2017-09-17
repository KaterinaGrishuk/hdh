<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AgeProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dateHelper', function($num){
            return new \App\HelperClass\DateHelper();
        });
    }
}
