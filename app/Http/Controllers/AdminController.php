<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Admin\Opd\storeDataOpdRequest;
use App\Repositories\Admin\Opd\DataOpdRepository;


use App\unitkerja;

class AdminController extends Controller
{
    protected $dataOpdRepository;

    public function __construct(
        DataOpdRepository $dataOpdRepository
    )
    {
        $this->middleware('auth');
        $this->dataOpdRepository = $dataOpdRepository;
    }


    public function index()
    {
        return view ('admin.index');
    }

    // ---------------- OPD ------------------------
    public function opd()
    {
        $opd = unitkerja::all();
        return view ('admin.opd.index',compact('opd'));
    }

    public function storeOpd(storeDataOpdRequest $request)
    {
        $unitkerja = $this->dataOpdRepository->storeOpd($request);
        return redirect()->route('admin.opd');
    }

    public function updateOpd(storeDataOpdRequest $request,$id)
    {
        $unitkerja = $this->dataOpdRepository->updateOpd($request,$id);
        return redirect()->route('admin.opd');
    }

    public function destroyOpd($id)
    {
        $unitkerja = $this->dataOpdRepository->destroyOpd($id);
        return redirect()->route('admin.opd');
    }
}
