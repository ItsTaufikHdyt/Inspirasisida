<?php

namespace App\Repositories\Admin\Core\Galeri;

use Illuminate\Http\Request;

interface GaleriRepositoryInterface {

    public function storeGaleri($request);
    public function destroyGaleri($id);
    
    
}