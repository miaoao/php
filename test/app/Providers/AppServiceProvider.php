<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Service\MyMailerServices;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(
            'MyMailerServices',function($app){
                return new MyMailerServices();
            }
        );
        $this->app->bind('App\Contracts\Mailer','App\Service\MyMailerServices');
    }
}
