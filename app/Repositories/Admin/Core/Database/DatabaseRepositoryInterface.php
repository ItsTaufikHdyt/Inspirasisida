<?php

namespace App\Repositories\Admin\Core\Database;

use Illuminate\Http\Request;

interface DatabaseRepositoryInterface {

    public function storeDbOpd($request);
    public function updateDbOpd($request, $id);
    public function destroyDbOpd($id);
    public function downloadDbOpd($id);

    // public function storeDbOpdPenelitian($request);
    // public function updateDbOpdPenelitian($request, $id);
    // public function destroyDbOpdPenelitian($id);

    public function storeDbMasyarakat($request);
    public function updateDbMasyarakat($request, $id);
    public function destroyDbMasyarakat($id);

    // public function storeDbMasyarakatPenelitian($request);
    // public function updateDbMasyarakatPenelitian($request, $id);
    // public function destroyDbMasyarakatPenelitian($id);
    
    
}