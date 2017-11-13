<?php

namespace App\Providers;

use App\Channel;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema ;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //ADDED THIS LINE TO FIX ACCESS VIOLATION 1071
        Schema::defaultStringLength(191);
        \View::composer('*', function ($view) {
            $channels = \Cache::rememberForever('channels', function () {
                return Channel::all();
            });

            $view->with('channels', $channels);
        });

        \Validator::extend('spamfree', 'App\Rules\SpamFree@passes');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->isLocal()) {
            $this->app->register(\Barryvdh\Debugbar\ServiceProvider::class);
        }
    }
}
