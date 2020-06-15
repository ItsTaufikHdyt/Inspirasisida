<?php

namespace App\Repositories\Admin\Opd;

use App\Repositories\Admin\Core\Opd\DataOpdRepositoryinterface;
use Illuminate\Http\Request;
use App\unitkerja;

class DataOpdRepository implements DataOpdRepositoryinterface
{

protected $unitkerja;

    public function __contruct(unitkerja $unitkerja)
    {
        $this->unitkerja = $unitkerja;
    }

    public function storeOpd($request)
    {
        $unitkerja = unitkerja::create([
        'nama_uk'  => $request->nama_uk,
        ]);
    }

    public function updateOpd($request, $id)
    {
        $unitkerja = unitkerja::find($id);
        $unitkerja->nama_uk = $request->input('nama_uk');
        $unitkerja->save();
    }

    public function destroyOpd($id)
    {
        $unitkerja = unitkerja::find($id);
        $unitkerja->delete();
    }
}