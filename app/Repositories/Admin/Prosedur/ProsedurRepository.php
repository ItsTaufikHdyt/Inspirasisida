<?php

namespace App\Repositories\Admin\Prosedur;

use App\Repositories\Admin\Core\Prosedur\ProsedurRepositoryinterface;
use Illuminate\Http\Request;
use App\prosedur;
use Carbon\Carbon;
use Storage;

class ProsedurRepository implements ProsedurRepositoryinterface
{

protected $prosedur;

    public function __contruct(prosedur $prosedur)
    {
        $this->prosedur = $prosedur;
    }

    public function storeProsedur($request)
    {
        $judul_prosedur = str_replace(' ','-',$request->judul_prosedur);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_berkas = $request->file('berkas')->getClientOriginalExtension();
        $berkas_file = $date."-".$judul_prosedur.".". $ext_berkas;

        $prosedur = prosedur::create([
        'judul_prosedur'  => $request->judul_prosedur,
        'narasi'          => $request->narasi,
        'berkas'          => $request->file('berkas')->storeAs('berkas-prosedur', $berkas_file),
        ]);
    }

    public function updateProsedur($request, $id)
    {
        if(\File::exists(public_path($request->berkas))){
            Storage::delete($prosedur->berkas);
        }
        else{

        $judul_prosedur = str_replace(' ','-',$request->judul_prosedur);
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_berkas = $request->file('berkas')->getClientOriginalExtension();
        $berkas_file = $date."-".$judul_prosedur.".". $ext_berkas;

        $prosedur = prosedur::find($id);
        $prosedur->judul_prosedur = $request->input('judul_prosedur');
        $prosedur->narasi = $request->input('narasi');
        $prosedur->berkas = $request->file('berkas')->storeAs('berkas-prosedur', $berkas_file);
        $prosedur->save();
        
        }
    }

    public function destroyProsedur($id)
    {
        $prosedur = prosedur::find($id);
        Storage::delete($prosedur->berkas);
        $prosedur->delete();
    }
}