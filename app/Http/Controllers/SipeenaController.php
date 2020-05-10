<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pendaftaran;
use Auth;
use Carbon\Carbon;

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

    public function storeFormIndInovasi(Request $request)
    {
        $request->validate([
            'nama'               =>'required',
            'ttl'                =>'required',
            'agama'              =>'required',
            'pekerjaan'          =>'required',
            'email'              =>'required|email:rfc,dns',
            'pendidikan'         =>'required',
            'nation'             =>'required',
            'ktp'                =>'required|mimes:jpeg,jpg|size:512',
            'telp'               =>'required',
            'izin_ortu'          =>'required|mimes:jpeg,jpg|size:512',
            'izin_sekolah'       =>'required|mimes:jpeg,jpg|size:512',
            'surat_pernyataan'   =>'required|mimes:jpeg,jpg|size:512',
            'alamat'             =>'required',
            'proposal'           =>'required|mimes:pdf|size:5024',
            'url_proposal'       =>'required'
        ]);

        $nama = str_replace(' ','-',$request->nama);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);
        //ktp
        $ext_ktp = $request->file('ktp')->getClientOriginalExtension();
        $ktp_file = $date."-".$nama."-ktp"."".".". $ext_ktp;
        //Izin Orang Tua
        $ext_izin_ortu = $request->file('izin_ortu')->getClientOriginalExtension();
        $izin_ortu_file = $date."-".$nama."-izin-ortu"."".".". $ext_izin_ortu;
        //Izin Sekolah
        $ext_izin_sekolah = $request->file('izin_sekolah')->getClientOriginalExtension();
        $izin_sekolah_file = $date."-".$nama."-izin-sekolah"."".".". $ext_izin_sekolah;
        //Surat Pernyataan
        $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
        $surat_pernyataan_file = $date."-".$nama."-surat-pernyataan"."".".". $ext_surat_pernyataan;
        //proposal
        $ext_proposal = $request->file('proposal')->getClientOriginalExtension();
        $proposal_file = $date."-".$nama."-proposal"."".".". $ext_proposal;

        $pendaftaran = pendaftaran::create([
           'nama'               =>$request->nama,
           'ttl'                =>$request->ttl,
           'agama'              =>$request->agama,
           'pekerjaan'          =>$request->pekerjaan,
           'email'              =>$request->email,
           'pendidikan'         =>$request->pendidikan,
           'nation'             =>$request->nation,
           'ktp'                =>$request->file('ktp')->storeAs('ktp', $ktp_file),
           'telp'                =>$request->telp,
           'izin_ortu'          =>$request->file('izin_ortu')->storeAs('izin-ortu', $izin_ortu_file),
           'izin_sekolah'       =>$request->file('izin_sekolah')->storeAs('izin-sekolah', $izin_sekolah_file),
           'surat_pernyataan'   =>$request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file),
           'alamat'             =>$request->alamat,
           'proposal'           =>$request->file('proposal')->storeAs('proposal', $proposal_file),
           'url_proposal'       =>$request->url_proposal,
           'verifikasi'         => 0,
           'kelompok'           => 0,
           'kategori_peena'      =>'inovasi'
        ]);

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
