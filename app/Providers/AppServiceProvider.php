<?php

namespace App\Providers;


use Illuminate\Support\Facades\Schema; // Asegúrate de importar esta clase
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
        Schema::defaultStringLength(191); // añadir para que no de erro al crear las tablas
    }
}
