<?php

namespace App\Repositories\Admin\Prosedur;

use App\Repositories\Admin\Core\Prosedur\ProsedurRepositoryInterface;
use Illuminate\Http\Request;
use App\prosedur;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use DB;

class ProsedurRepository implements ProsedurRepositoryInterface
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

        $id = $request->id;
        $update = [   
            'judul_prosedur' => $request->judul_prosedur,
            'narasi' => $request->narasi
        ];

        $cek_prosedur = prosedur::find($id);

        $file   = $request->file("berkas");
        $foto   = $request->file("foto");
        if ($request->hasfile("berkas") && $request->hasfile("foto")) {
        //Update Foto & Berkas
        Storage::delete($cek_prosedur->berkas);
        Storage::disk('local')->delete('public/foto_berita/' .$cek_prosedur->foto);
        $nama = str_replace(' ','',$request->file('foto')->getClientOriginalName());
        $today1 = Carbon::today()->toDateString();
        $date1 = str_replace('-','',$today1);
    
        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date1."-".$nama;

        $judul_prosedur = str_replace(' ','-',$request->judul_prosedur);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_berkas = $request->file('berkas')->getClientOriginalExtension();
        $berkas_file = $date."-".$judul_prosedur.".". $ext_berkas;

        $path = $request->file('foto')->storeAs('public/foto_berita', $foto_file);

        $update['berkas'] = $request->file('berkas')->storeAs('berkas-prosedur', $berkas_file);
        $update['foto'] = $foto_file;

        }elseif($request->hasfile("foto") && $request->berkas = $cek_prosedur->berkas){
        //Update Foto 
        Storage::disk('local')->delete('public/foto_berita/' .$cek_prosedur->foto);

        $nama = str_replace(' ','',$request->file('foto')->getClientOriginalName());
        $today1 = Carbon::today()->toDateString();
        $date1 = str_replace('-','',$today1);
    
        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date1."-".$nama;

        $path = $request->file('foto')->storeAs('public/foto_berita', $foto_file);

        $update['foto'] = $foto_file ;
             
        }elseif($request->hasfile("berkas") && $request->foto = $cek_prosedur->foto){
        //Update Berkas
        Storage::delete($cek_prosedur->berkas);

        $judul_prosedur = str_replace(' ','-',$request->judul_prosedur);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);
    
        $ext_berkas = $request->file('berkas')->getClientOriginalExtension();
        $berkas_file = $date."-".$judul_prosedur.".". $ext_berkas;
        
        $update['berkas'] = $request->file('berkas')->storeAs('berkas-prosedur', $berkas_file);
        }
        DB::table('prosedur')->where('id', $id)->update($update);

             
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