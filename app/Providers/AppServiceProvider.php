<?php

namespace App\Providers;

use App\services\contracts\ExampleContract;
use App\services\NormalDependency;
use App\services\SingletonDependency;
use App\services\ViaInterfaceDependency;
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
        $this->app->bind(NormalDependency::class,function($app){
            return new NormalDependency();
        });

        $this->app->singleton(SingleTonDependency::class,function($app){
            return new SingleTonDependency();
        });

        $this->app->bind(ExampleContract::class,function($app){
            return new ViaInterfaceDependency();
        });
    }
}
