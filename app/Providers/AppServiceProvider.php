<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

use App\Models\Config;
use Illuminate\Support\Facades\Cache;

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

        Paginator::useBootstrapFive();

        view()->share('config',Cache::get(Config::CONFIG_KEY));


        Route::resourceVerbs([
            'create'=>'olustur',
            'edit'=>'güncelle',
        ]);

    
    }
}
