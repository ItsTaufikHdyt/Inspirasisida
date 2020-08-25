<?php

namespace App\Repositories\Admin\Galeri;

use App\Repositories\Admin\Core\Galeri\GaleriRepositoryInterface;
use Illuminate\Http\Request;
use App\galeri;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


class GaleriRepository implements GaleriRepositoryInterface
{

protected $galeri;

    public function __contruct(prosedur $galeri)
    {
        $this->galeri = $galeri;
    }

    public function storeGaleri($request)
    {
        
        $nama = str_replace(' ','',$request->file('foto')->getClientOriginalName());
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date."-".$nama;

        $path = $request->file('foto')->storeAs('public/galeri', $foto_file);

        $galeri = galeri::create([
        'foto'  => $foto_file,
        'kategori' => $request->kategori,
        ]);

    }


    public function destroyGaleri($id)
    {
        try{
            $galeri = galeri::find($id);
            Storage::disk('local')->delete('public/galeri/' .$galeri->foto);
            $galeri->delete();
        }catch(\Exception $e){
            return $e->getMessage();
        }
        
    }

    
}