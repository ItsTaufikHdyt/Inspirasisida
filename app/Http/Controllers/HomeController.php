<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prosedur;
use Storage;
Use App\dbmasyarakat;
Use App\dbopd;
Use App\galeri;


class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $galeri_foto = galeri::where('kategori','0')->get();
        $galeri_poster = galeri::where('kategori','1')->get();
        $prosedur = prosedur::all();
        return view('index',compact('prosedur','galeri_foto','galeri_poster'));
    }

    public function showMore($id)
    {
        $prosedur = prosedur::find($id);
        return view('user.berita-terbaru.index',compact('prosedur'));
    }

    public function downloadProsedur($id){
        $prosedur = prosedur::find($id);
        return Storage::download($prosedur->berkas);
    }

    public function dbMasyarakatInovasi(){
        $dbmasyarakat = dbmasyarakat::where('kategori',0)->get();
        return view('database.dbmasyarakatinovasi',compact('dbmasyarakat'));
    }

    public function dbMasyarakatPenelitian(){
        $dbmasyarakat = dbmasyarakat::where('kategori',1)->get();
        return view('database.dbmasyarakatpenelitian',compact('dbmasyarakat'));
    }
   
    public function dbOpdInovasi(){
        $dbopd = dbopd::where('kategori',0)->get();
        return view('database.dbopdinovasi',compact('dbopd'));
    }
    
    public function dbOpdPenelitian(){
        $dbopd = dbopd::where('kategori',1)->get();
         return view('database.dbopdpenelitian',compact('dbopd'));
    }

    public function panduan(){
        return response()->download(storage_path("app/panduan/panduan-sipeena.pdf"));
    }
    
  
}
