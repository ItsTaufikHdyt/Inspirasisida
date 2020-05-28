<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\storeFormIndInovasiRequest;
use App\Http\Requests\storeFormKlpInovasiRequest;
use App\Http\Requests\storeFormLmbInovasiRequest;
use App\Repositories\FormIndInovasiRepository;
use App\Repositories\FormKlpInovasiRepository;
use App\Repositories\FormLmbInovasiRepository;




class SipeenaController extends Controller
{
    protected $formIndInovasiRepository;
    protected $formKlpInovasiRepository;
    protected $formLmbInovasiRepository;

    public function __construct(FormIndInovasiRepository $formIndInovasiRepository,
    FormKlpInovasiRepository $formKlpInovasiRepository,FormLmbInovasiRepository $formLmbInovasiRepository )
    {
        $this->middleware('auth');
        $this->formIndInovasiRepository = $formIndInovasiRepository;
        $this->formKlpInovasiRepository = $formKlpInovasiRepository;
        $this->formLmbInovasiRepository = $formLmbInovasiRepository;
    }
    
    public function index()
    {
        return view ('user.daftar-peena.index');
    }

    // ---------------- Inovasi --------------------
    public function inovasi()
    {   
        return view ('user.daftar-peena.inovasi.index');
    }

    public function formIndInovasi()
    {
        return view ('user.daftar-peena.inovasi.form-ind-inovasi');
    }

    public function storeFormIndInovasi(storeFormIndInovasiRequest $request)
    {
        $pendaftaran = $this->formIndInovasiRepository->storeIndInovasiForm($request);
      
        return view ('user.daftar-peena.inovasi.form-ind-inovasi');
    }

    public function formKlpInovasi()
    {
        return view ('user.daftar-peena.inovasi.form-klp-inovasi');
    }

    public function storeFormKlpInovasi(storeFormKlpInovasiRequest $request)
    {
        $pendaftaran = $this->formKlpInovasiRepository->storeKlpInovasiForm($request);

        return view ('user.daftar-peena.inovasi.form-klp-inovasi');
    }

    public function formLmbInovasi()
    {
        return view ('user.daftar-peena.inovasi.form-lmb-inovasi');
    }

    public function storeFormLmbInovasi(storeFormLmbInovasiRequest $request)
    {
        $lembaga = $this->formLmbInovasiRepository->storeLmbInovasiForm($request);

        return view ('user.daftar-peena.inovasi.form-lmb-inovasi');
    }

   // ---------------- Penelitian --------------------
   public function penelitian()
   {
       return view ('user.daftar-peena.penelitian.index');
   }
   public function formIndPenelitian()
   {
       return view ('user.daftar-peena.penelitian.form-ind-research');
   }
   public function formKlpPenelitian()
   {
       return view ('user.daftar-peena.penelitian.form-klp-research');
   }
   public function formLmbPenelitian()
   {
       return view ('user.daftar-peena.penelitian.form-lmb-research');
   }

   // ---------------- Skpd ------------------------
   public function skpd()
    {
        return view ('user.daftar-peena.skpd.index');
    }

   // ---------------- Riwayat ------------------------
   public function riwayat()
    {
        $created_at_user = Auth::user()->created_at;
        return view ('user.akun.riwayat',['created_at_user' => $created_at_user]);
    }

   // ---------------- Profil ------------------------
   public function profil()
    {
        return view ('user.akun.profil');
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
