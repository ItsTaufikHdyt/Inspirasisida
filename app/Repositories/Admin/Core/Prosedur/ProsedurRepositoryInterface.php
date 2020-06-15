<?php

namespace App\Repositories\Admin\Core\Prosedur;

use Illuminate\Http\Request;

interface ProsedurRepositoryInterface {

    public function storeProsedur($request);
    public function updateProsedur($request, $id);
    public function destroyProsedur($id);
    
}