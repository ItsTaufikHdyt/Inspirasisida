<?php

namespace App\Providers;

use App\Repositories\Inovasi\FormIndInovasiRepository;
use App\Repositories\Core\Inovasi\FormIndInovasiRepositoryInterface;
use App\Repositories\Inovasi\FormKlpInovasiRepository;
use App\Repositories\Core\Inovasi\FormKlpInovasiRepositoryInterface;
use App\Repositories\Inovasi\FormLmbInovasiRepository;
use App\Repositories\Core\Inovasi\FormLmbInovasiRepositoryInterface;

use App\Repositories\Penelitian\FormIndPenelitianRepository;
use App\Repositories\Core\Penelitian\FormIndPenelitianRepositoryInterface;
use App\Repositories\Penelitian\FormKlpPenelitianRepository;
use App\Repositories\Core\Penelitian\FormKlpPenelitianRepositoryInterface;
use App\Repositories\Penelitian\FormLmbPenelitianRepository;
use App\Repositories\Core\Penelitian\FormLmbPenelitianRepositoryInterface;
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
                         FormLmbInovasiRepositoryInterface::class, FormLmbInovasiRepository::class,
                         FormIndPenelitianRepositoryInterface::class, FormIndPenelitianRepository::class, 
                         FormKlpPenelitianRepositoryInterface::class, FormKlpPenelitianRepository::class,
                         FormLmbPenelitianRepositoryInterface::class, FormLmbPenelitianRepository::class
                        );
    }
}