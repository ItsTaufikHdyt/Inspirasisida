<?php

namespace App\Providers;

use App\Repositories\Inovasi\FormIndInovasiRepository;
use App\Repositories\Core\Inovasi\FormIndInovasiRepositoryInterface;
use App\Repositories\Inovasi\FormKlpInovasiRepository;
use App\Repositories\Core\Inovasi\FormKlpInovasiRepositoryInterface;
use App\Repositories\Inovasi\FormLmbInovasiRepository;
use App\Repositories\Core\Inovasi\FormLmbInovasiRepositoryInterface;
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
                         FormKlpInovasiRepositoryInterface::class, FormKlpInovasiRepository::class,
                         FormLmbInovasiRepositoryInterface::class, FormLmbInovasiRepository::class
                        );
    }
}
