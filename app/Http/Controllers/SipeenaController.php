<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Inovasi\storeFormIndInovasiRequest;
use App\Http\Requests\Inovasi\storeFormKlpInovasiRequest;
use App\Http\Requests\Inovasi\storeFormLmbInovasiRequest;
use App\Repositories\Inovasi\FormIndInovasiRepository;
use App\Repositories\Inovasi\FormKlpInovasiRepository;
use App\Repositories\Inovasi\FormLmbInovasiRepository;

use App\Http\Requests\Penelitian\storeFormIndPenelitianRequest;
use App\Http\Requests\Penelitian\storeFormKlpPenelitianRequest;
use App\Http\Requests\Penelitian\storeFormLmbPenelitianRequest;
use App\Repositories\Penelitian\FormIndPenelitianRepository;
use App\Repositories\Penelitian\FormKlpPenelitianRepository;
use App\Repositories\Penelitian\FormLmbPenelitianRepository;

use App\Repositories\Opd\PenaOpdRepository;
use App\Http\Requests\Opd\penaOpdRequest;

use App\unitkerja;
use App\User;
use Auth;
use Alert;
use DB;




class SipeenaController extends Controller
{
    protected $formIndInovasiRepository;
    protected $formKlpInovasiRepository;
    protected $formLmbInovasiRepository;

    protected $formIndPenelitianRepository;
    protected $formKlpPenelitianRepository;
    protected $formLmbPenelitianRepository;

    protected $penaOpdRepository;

    public function __construct(
        FormIndInovasiRepository $formIndInovasiRepository,
        FormKlpInovasiRepository $formKlpInovasiRepository,
        FormLmbInovasiRepository $formLmbInovasiRepository,

        FormIndPenelitianRepository $formIndPenelitianRepository,
        FormKlpPenelitianRepository $formKlpPenelitianRepository,
        FormLmbPenelitianRepository $formLmbPenelitianRepository,

        PenaOpdRepository $penaOpdRepository
    ) {
        $this->middleware('auth');
        $this->formIndInovasiRepository = $formIndInovasiRepository;
        $this->formKlpInovasiRepository = $formKlpInovasiRepository;
        $this->formLmbInovasiRepository = $formLmbInovasiRepository;

        $this->formIndPenelitianRepository = $formIndPenelitianRepository;
        $this->formKlpPenelitianRepository = $formKlpPenelitianRepository;
        $this->formLmbPenelitianRepository = $formLmbPenelitianRepository;

        $this->penaOpdRepository = $penaOpdRepository;
    }

    public function index()
    {
        return view('user.daftar-peena.index');
    }

    // ---------------- Inovasi --------------------
    public function inovasi()
    {
        return view('user.daftar-peena.inovasi.index');
    }

    public function formIndInovasi()
    {
        return view('user.daftar-peena.inovasi.form-ind-inovasi');
    }

    public function storeFormIndInovasi(storeFormIndInovasiRequest $request)
    {
        try {
            $pendaftaran = $this->formIndInovasiRepository->storeIndInovasiForm($request);
            Alert::success('Inovasi Individu', 'Success');
            return view('user.daftar-peena.inovasi.form-ind-inovasi');
        } catch (Throwable $e) {
            report($e);
            Alert::error('Inovasi Individu', $e);
            return view('user.daftar-peena.inovasi.form-ind-inovasi');
        }
    }

    public function formKlpInovasi()
    {
        return view('user.daftar-peena.inovasi.form-klp-inovasi');
    }

    public function storeFormKlpInovasi(storeFormKlpInovasiRequest $request)
    {
        try {
            $pendaftaran = $this->formKlpInovasiRepository->storeKlpInovasiForm($request);
            Alert::success('Inovasi Kelompok', 'Success');
            return view('user.daftar-peena.inovasi.form-klp-inovasi');
        } catch (Throwable $e) {
            Alert::error('Inovasi Kelompok', $e);
            return view('user.daftar-peena.inovasi.form-klp-inovasi');
        }
    }

    public function formLmbInovasi()
    {
        return view('user.daftar-peena.inovasi.form-lmb-inovasi');
    }

    public function storeFormLmbInovasi(storeFormLmbInovasiRequest $request)
    {
        try {
            $lembaga = $this->formLmbInovasiRepository->storeLmbInovasiForm($request);
            Alert::success('Inovasi Lembaga', 'Success');
            return view('user.daftar-peena.inovasi.form-lmb-inovasi');
        } catch (Throwable $e) {
            Alert::error('Inovasi Lembaga', $e);
            return view('user.daftar-peena.inovasi.form-lmb-inovasi');
        }
    }

    // ---------------- Penelitian --------------------
    public function penelitian()
    {
        return view('user.daftar-peena.penelitian.index');
    }
    public function formIndPenelitian()
    {
        return view('user.daftar-peena.penelitian.form-ind-research');
    }

    public function storeFormIndPenelitian(storeFormIndPenelitianRequest $request)
    {
        try {
            $pendaftaran = $this->formIndPenelitianRepository->storeIndPenelitianForm($request);
            Alert::success('Penelitian Individu', 'Success');
            return view('user.daftar-peena.penelitian.form-ind-research');
        } catch (Throwable $e) {
            Alert::error('Penelitian Individu', $e);
            return view('user.daftar-peena.penelitian.form-ind-research');
        }
    }

    public function formKlpPenelitian()
    {
        return view('user.daftar-peena.penelitian.form-klp-research');
    }

    public function storeFormKlpPenelitian(storeFormKlpPenelitianRequest $request)
    {
        try {
            $pendaftaran = $this->formKlpPenelitianRepository->storeKlpPenelitianForm($request);
            Alert::success('Penelitian Kelompok', 'Success');
            return view('user.daftar-peena.penelitian.form-klp-research');
        } catch (Throwable $e) {
            Alert::error('Penelitian Individu', $e);
            return view('user.daftar-peena.penelitian.form-klp-research');
        }
    }

    public function formLmbPenelitian()
    {
        return view('user.daftar-peena.penelitian.form-lmb-research');
    }

    public function storeFormLmbPenelitian(storeFormLmbPenelitianRequest $request)
    {
        try {
            $lembaga = $this->formLmbPenelitianRepository->storeLmbPenelitianForm($request);
            Alert::success('Penelitian Lembaga', 'Success');
            return view('user.daftar-peena.penelitian.form-lmb-research');
        } catch (Throwable $e) {
            Alert::error('Penelitian Lembaga', $e);
            return view('user.daftar-peena.penelitian.form-lmb-research');
        }
    }

    // ---------------- Skpd ------------------------
    public function opd()
    {
        $unitkerja = unitkerja::all();
        return view('user.daftar-peena.opd.index', compact('unitkerja'));
    }

    public function storeOpd(PenaOpdRequest $request)
    {
        $unitkerja = unitkerja::all();
        try {
            $penaopd = $this->penaOpdRepository->storePenaOpd($request);
            Alert::success('OPD', 'Success');
            return view('user.daftar-peena.opd.index', compact('unitkerja'));
        } catch (Throwable $e) {
            Alert::error('OPD', $e);
            return view('user.daftar-peena.opd.index', compact('unitkerja'));
        }
    }

    // ---------------- refreshCaptcha ------------------------
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }

    // ---------------- Riwayat ------------------------
    public function riwayat()
    {
        $created_at_user = Auth::user()->created_at;
        return view('user.akun.riwayat', ['created_at_user' => $created_at_user]);
    }

    // ---------------- Profil ------------------------
    public function profil()
    {
        return view('user.akun.profil');
    }

    // ---------------- UpdateProfil ------------------------
    public function updateProfil(Request $request,$id)
    {

        $getUser = Auth::user()->id;
        $data = [];
        if($request->has('username')){
            $data['username'] = $request->username;
        }
        if($request->has('password')){
            $data['password'] = bcrypt($request->password);
        }
        $tes = DB::table('users')
        ->where('id', $getUser) 
        ->update($data);
        Alert::success('Update Profile', 'Success');
        return redirect()->route('profil');
    }
    // ---------------- Profil ------------------------

    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
