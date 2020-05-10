<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pendaftaran;
use Auth;

class SipeenaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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

    public function storeFormIndInovasi()
    {

        return view ('user.daftar-peena.inovasi.form-ind-inovasi');
    }


    public function formKlpInovasi()
    {
        return view ('user.daftar-peena.inovasi.form-klp-inovasi');
    }
    public function formLmbInovasi()
    {
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
