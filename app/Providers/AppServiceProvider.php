<?php

namespace App\Providers;

use App\App\Peliculas\PeliculaRepository;
use App\App\Peliculas\PeliculaRepositoryInteface;
use Illuminate\Support\Facades\Schema;
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
        $this->app->bind(PeliculaRepositoryInteface::class, PeliculaRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
