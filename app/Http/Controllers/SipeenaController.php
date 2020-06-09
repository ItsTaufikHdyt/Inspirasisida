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




class SipeenaController extends Controller
{
    protected $formIndInovasiRepository;
    protected $formKlpInovasiRepository;
    protected $formLmbInovasiRepository;

    protected $formIndPenelitianRepository;
    protected $formKlpPenelitianRepository;
    protected $formLmbPenelitianRepository;

    public function __construct(
        FormIndInovasiRepository $formIndInovasiRepository,
        FormKlpInovasiRepository $formKlpInovasiRepository,
        FormLmbInovasiRepository $formLmbInovasiRepository, 

        FormIndPenelitianRepository $formIndPenelitianRepository,
        FormKlpPenelitianRepository $formKlpPenelitianRepository,
        FormLmbPenelitianRepository $formLmbPenelitianRepository
    )
    {
        $this->middleware('auth');
        $this->formIndInovasiRepository = $formIndInovasiRepository;
        $this->formKlpInovasiRepository = $formKlpInovasiRepository;
        $this->formLmbInovasiRepository = $formLmbInovasiRepository;

        $this->formIndPenelitianRepository = $formIndPenelitianRepository;
        $this->formKlpPenelitianRepository = $formKlpPenelitianRepository;
        $this->formLmbPenelitianRepository = $formLmbPenelitianRepository;
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

   public function storeFormIndPenelitian(storeFormIndPenelitianRequest $request)
    {
        $pendaftaran = $this->formIndPenelitianRepository->storeIndPenelitianForm($request);
      
        return view ('user.daftar-peena.penelitian.form-ind-research');
    }

   public function formKlpPenelitian()
   {
       return view ('user.daftar-peena.penelitian.form-klp-research');
   }

   public function storeFormKlpPenelitian(storeFormKlpPenelitianRequest $request)
   {
       $pendaftaran = $this->formKlpPenelitianRepository->storeKlpPenelitianForm($request);

       return view ('user.daftar-peena.penelitian.form-klp-research');
   }

   public function formLmbPenelitian()
   {
       return view ('user.daftar-peena.penelitian.form-lmb-research');
   }

   public function storeFormLmbPenelitian(storeFormLmbPenelitianRequest $request)
   {
       $lembaga = $this->formLmbPenelitianRepository->storeLmbPenelitianForm($request);

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
