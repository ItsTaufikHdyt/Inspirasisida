<?php

namespace App\Providers;

use App\Repositories\FormIndRepository;
use App\Repositories\Core\FormIndRepositoryInterface;
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
        $this->app->bind(FormIndInovasiRepositoryInterface::class, FormIndInovasiRepository::class);
    }
}
