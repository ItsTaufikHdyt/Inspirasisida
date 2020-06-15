<?php

namespace App\Repositories\Admin\Core\Opd;

use Illuminate\Http\Request;

interface DataOpdRepositoryInterface {

    public function storeOpd($request);
    public function updateOpd($request, $id);
    public function destroyOpd($id);
    
}