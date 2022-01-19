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
        view()->composer('layout.site', function($view){
            $home = \App\Models\home::all();
            $view->with(compact('home'));
        });

        view()->composer('index', function($view){
            $about = \App\Models\about::all();
            $services = \App\Models\services::all();
            $portfolios = \App\Models\portfolio::all();
            $footer = \App\Models\footer::all();
            $view->with(compact('about','services','portfolios','footer'));
        });
    }
}
