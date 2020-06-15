<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\Admin\Opd\storeDataOpdRequest;
use App\Repositories\Admin\Opd\DataOpdRepository;

use App\Http\Requests\Admin\Prosedur\storeProsedurRequest;
use App\Repositories\Admin\Prosedur\ProsedurRepository;

use App\Repositories\Admin\DataSipeena\DataSipeenaRepository;

use App\prosedur;
use App\unitkerja;
use App\pendaftaran;
use App\lembaga;
use App\penaopd;

class AdminController extends Controller
{
    protected $dataSipeenaRepository;
    protected $dataOpdRepository;
    protected $prosedurRepository;

    public function __construct(
        DataSipeenaRepository $dataSipeenaRepository,
        DataOpdRepository $dataOpdRepository,
        ProsedurRepository $prosedurRepository
    )
    {
        $this->middleware('auth');
        $this->dataSipeenaRepository = $dataSipeenaRepository;
        $this->dataOpdRepository = $dataOpdRepository;
        $this->prosedurRepository = $prosedurRepository;
    }


    public function index()
    {   $inovasi = pendaftaran::where('kategori_peena','=', 'inovasi')->count();
        $penelitian = pendaftaran::where('kategori_peena','=','penelitian')->count();
        $penaopd = penaopd::count();
        return view ('admin.index',['inovasi' => $inovasi,'penelitian' => $penelitian, 'penaopd' => $penaopd]);
    }

    // ---------------- Data SiPeena ------------------------
    public function verifikasi()
    {   
        $perorangan = pendaftaran::where('kelompok','=', 0)
                                 ->where('verifikasi','=', 0)
                                 ->get();
        $kelompok = pendaftaran::where('kelompok','=',1)
                                ->where('verifikasi','=', 0)                       
                                ->get(); 
        $lembaga = lembaga::where('verifikasi', 0)->get();
        $pena_opd = penaopd::where('verifikasi', 0)->get();         
        return view ('admin.data-sipeena.verifikasi',compact('perorangan','kelompok','lembaga','pena_opd'));
    }
//-------------------- Verifikasi -------------------
    public function verifikasiPendaftaran($id)
    { 
        $pendaftaran = pendaftaran::find($id);
        return view ('admin.data-sipeena.verifikasi.verifikasi-pendaftaran',compact('pendaftaran'));
    }

    public function verifikasiLembaga($id)
    { 
        $lembaga = lembaga::find($id);
        return view ('admin.data-sipeena.verifikasi.verifikasi-lembaga',compact('lembaga'));
    }

    public function verifikasiOpd($id)
    { 
        $penaopd = penaopd::find($id);
        return view ('admin.data-sipeena.verifikasi.verifikasi-opd',compact('penaopd'));
    }
//--------------------- Update Verifikasi --------------
    public function updateVerifikasiPendaftaran(Request $request, $id)
    { 
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->verifikasi = $request->kdverif;
        $pendaftaran->ket = $request->komen;
        $pendaftaran->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateVerifikasiLembaga(Request $request, $id)
    { 
        $lembaga = lembaga::find($id);
        $lembaga->verifikasi = $request->kdverif;
        $lembaga->ket = $request->komen;
        $lembaga->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateVerifikasiOpd(Request $request, $id)
    { 
        $opd = penaopd::find($id);
        $opd->verifikasi = $request->kdverif;
        $opd->ket = $request->komen;
        $opd->save();
        return redirect()->route('admin.verifikasi');
    }
    //-------------------- ACC -------------------
    public function accPendaftaran($id)
    { 
        $pendaftaran = pendaftaran::find($id);
        return view ('admin.data-sipeena.verifikasi.acc-pendaftaran',compact('pendaftaran'));
    }

    public function accLembaga($id)
    { 
        $lembaga = lembaga::find($id);
        return view ('admin.data-sipeena.verifikasi.acc-lembaga',compact('lembaga'));
    }

    public function accOpd($id)
    { 
        $penaopd = penaopd::find($id);
        return view ('admin.data-sipeena.verifikasi.acc-opd',compact('penaopd'));
    }
//--------------------- Update ACC --------------
    public function updateAccPendaftaran(Request $request, $id)
    { 
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->verifikasi = $request->kdverif;
        $pendaftaran->ket = $request->komen;
        $pendaftaran->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateAccLembaga(Request $request, $id)
    { 
        $lembaga = lembaga::find($id);
        $lembaga->verifikasi = $request->kdverif;
        $lembaga->ket = $request->komen;
        $lembaga->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateAccOpd(Request $request, $id)
    { 
        $opd = penaopd::find($id);
        $opd->verifikasi = $request->kdverif;
        $opd->ket = $request->komen;
        $opd->save();
        return redirect()->route('admin.verifikasi');
    }
//----------------------- Destroy -----------------------
    public function destroySipeenaPendaftaran($id)
    {
        $pendaftaran = $this->dataSipeenaRepository->destroySipeenaPendaftaran($id);
        return redirect()->route('admin.verifikasi');
    }

    public function destroySipeenaLembaga($id)
    {
        $lembaga = $this->dataSipeenaRepository->destroySipeenaLembaga($id);
        return redirect()->route('admin.verifikasi');
    }

    public function destroySipeenaOpd($id)
    {
        $opd = $this->dataSipeenaRepository->destroySipeenaOpd($id);
        return redirect()->route('admin.verifikasi');
    }

    public function diterima()
    {   
        $perorangan = pendaftaran::where('kelompok','=', 0)
                                 ->where('verifikasi','=', 1)
                                 ->get();
        $kelompok = pendaftaran::where('kelompok','=',1)
                                ->where('verifikasi','=', 1)                       
                                ->get(); 
        $lembaga = lembaga::where('verifikasi', 1)->get();
        $pena_opd = penaopd::where('verifikasi', 1)->get();         
        return view ('admin.data-sipeena.diterima',compact('perorangan','kelompok','lembaga','pena_opd'));
    }

    public function ditolak()
    {   
        $perorangan = pendaftaran::where('kelompok','=', 0)
                                 ->where('verifikasi','=', -1)
                                 ->get();
        $kelompok = pendaftaran::where('kelompok','=',1)
                                ->where('verifikasi','=', -1)                       
                                ->get(); 
        $lembaga = lembaga::where('verifikasi', -1)->get();
        $pena_opd = penaopd::where('verifikasi', -1)->get();         
        return view ('admin.data-sipeena.ditolak',compact('perorangan','kelompok','lembaga','pena_opd'));
    }

    public function finalis()
    {   
        $perorangan = pendaftaran::where('kelompok','=', 0)
                                 ->where('verifikasi','=', 2)
                                 ->get();
        $kelompok = pendaftaran::where('kelompok','=',1)
                                ->where('verifikasi','=', 2)                       
                                ->get(); 
        $lembaga = lembaga::where('verifikasi', 2)->get();
        $pena_opd = penaopd::where('verifikasi', 2)->get();         
        return view ('admin.data-sipeena.ditolak',compact('perorangan','kelompok','lembaga','pena_opd'));
    }

    // ---------------- Prosedur ------------------------
    public function prosedur()
    {
        $prosedur = prosedur::all();
        return view ('admin.prosedur.index',compact('prosedur'));
    }

    public function storeProsedur(storeProsedurRequest $request)
    {
        $prosedur = $this->prosedurRepository->storeProsedur($request);
        return redirect()->route('admin.prosedur');
    }

    public function updateProsedur(storeProsedurRequest $request,$id)
    {
        $unitkerja = $this->prosedurRepository->updateProsedur($request,$id);
        return redirect()->route('admin.prosedur');
    }

    public function destroyProsedur($id)
    {
        $prosedur = $this->prosedurRepository->destroyProsedur($id);
        return redirect()->route('admin.prosedur');
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

    // ---------------- Database ------------------------
    public function database()
    {
        return view ('admin.database.index');
    }

}
