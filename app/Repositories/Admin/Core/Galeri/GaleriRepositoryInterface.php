<?php

namespace App\Repositories\Admin\Core\Galeri;

use Illuminate\Http\Request;

interface GaleriRepositoryInterface {

    public function storeGaleri($request);
    public function updateGaleri($request, $id);
    public function destroyGaleri($id);
    
    
}