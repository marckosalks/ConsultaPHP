<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
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
        Http::macro('gitsada', function(){
            return Http::baseUrl('https://api.github.com/users/');
        });
        Http::macro('omdb', function(){
            return Http::baseUrl('http://www.omdbapi.com/?apikey=');
        });
    }
}
