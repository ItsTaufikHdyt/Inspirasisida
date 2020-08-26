<?php

namespace App\Repositories\Admin\Prosedur;

use App\Repositories\Admin\Core\Prosedur\ProsedurRepositoryinterface;
use Illuminate\Http\Request;
use App\prosedur;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ProsedurRepository implements ProsedurRepositoryinterface
{

protected $prosedur;

    public function __contruct(prosedur $prosedur)
    {
        $this->prosedur = $prosedur;
    }

    public function storeProsedur($request)
    {
        $nama = str_replace(' ','',$request->file('foto')->getClientOriginalName());
        $today1 = Carbon::today()->toDateString();
        $date1 = str_replace('-','',$today1);

        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date1."-".$nama;

        $path = $request->file('foto')->storeAs('public/foto_berita', $foto_file);

        $judul_prosedur = str_replace(' ','-',$request->judul_prosedur);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_berkas = $request->file('berkas')->getClientOriginalExtension();
        $berkas_file = $date."-".$judul_prosedur.".". $ext_berkas;

        $prosedur = prosedur::create([
        'judul_prosedur'  => $request->judul_prosedur,
        'foto'            => $foto_file,
        'narasi'          => $request->narasi,
        'berkas'          => $request->file('berkas')->storeAs('berkas-prosedur', $berkas_file),
        ]);
    }

    public function updateProsedur($request, $id)
    {
        $cek_prosedur = prosedur::find($id);
        if(Storage::exists($cek_prosedur->berkas, $cek_prosedur->foto)){
            Storage::delete($cek_prosedur->berkas);
            Storage::disk('local')->delete('public/foto_berita/' .$cek_prosedur->foto);
        }
        else{

        
        $nama = str_replace(' ','',$request->file('foto')->getClientOriginalName());
        $today1 = Carbon::today()->toDateString();
        $date1 = str_replace('-','',$today1);
    
        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date1."-".$nama;
    
        $path = $request->file('foto')->storeAs('public/foto_berita', $foto_file);

        $judul_prosedur = str_replace(' ','-',$request->judul_prosedur);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_berkas = $request->file('berkas')->getClientOriginalExtension();
        $berkas_file = $date."-".$judul_prosedur.".". $ext_berkas;

        $prosedur = prosedur::find($id);
        $prosedur->judul_prosedur = $request->input('judul_prosedur');
        $prosedur->narasi = $request->input('narasi');
        $prosedur->foto = $foto_file;
        $prosedur->berkas = $request->file('berkas')->storeAs('berkas-prosedur', $berkas_file);
        $prosedur->save();
        
        }
    }

    public function destroyProsedur($id)
    {
        try{

            $prosedur = prosedur::find($id);
            Storage::delete($prosedur->berkas);
            Storage::disk('local')->delete('public/foto_berita/' .$prosedur->foto);
            $prosedur->delete();
        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}