<?php

namespace App\Providers;

use App\Repositories\FormIndInovasiRepository;
use App\Repositories\Core\FormIndInovasiRepositoryInterface;
use App\Repositories\FormKlpInovasiRepository;
use App\Repositories\Core\FormKlpInovasiRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(FormIndInovasiRepositoryInterface::class, FormIndInovasiRepository::class, 
                         FormKlpInovasiRepositoryInterface::class, FormKlpInovasiRepository::class);
    }
}
