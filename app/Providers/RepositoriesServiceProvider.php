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

use App\Repositories\Admin\DataSipeena\DataSipeenaRepository;
use App\Repositories\Admin\Core\DataSipeena\DataSipeenaRepositoryInterface;
use App\Repositories\Admin\Opd\DataOpdRepository;
use App\Repositories\Admin\Core\Opd\DataOpdRepositoryInterface;
use App\Repositories\Admin\Prosedur\ProsedurRepository;
use App\Repositories\Admin\Core\Prosedur\ProsedurRepositoryInterface;
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
                         FormLmbPenelitianRepositoryInterface::class, FormLmbPenelitianRepository::class,
                         DataSipeenaRepositoryInterface::class, DataSipeenaRepository::class,
                         DataOpdRepositoryInterface::class, DataOpdRepository::class,
                         ProsedurRepositoryInterface::class, ProsedurRepository::class
                        );
    }
}
