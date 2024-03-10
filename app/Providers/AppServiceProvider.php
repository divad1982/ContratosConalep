<?php

namespace App\Providers;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Session::start();
        Schema::defaultStringLength(191);
        if (Session::has('menu')) {
            $variableDeSesion = Session::get('menu');
            $this->app->singleton('VueApp', function ($app) use ($variableDeSesion) {
                return $app->make('Illuminate\Contracts\View\Factory')->share('variableDeSesion', $variableDeSesion);
            });
        }
    }
}
