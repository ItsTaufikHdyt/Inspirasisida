<?php

namespace App\Repositories\Admin\Galeri;

use App\Repositories\Admin\Core\Galeri\GaleriRepositoryinterface;
use Illuminate\Http\Request;
use App\galeri;


class GaleriRepository implements GaleriRepositoryinterface
{

protected $galeri;

    public function __contruct(prosedur $galeri)
    {
        $this->galeri = $galeri;
    }

   
}