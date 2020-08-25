<?php

namespace App\Repositories\Admin\Galeri;

use App\Repositories\Admin\Core\Galeri\GaleriRepositoryInterface;
use Illuminate\Http\Request;
use App\galeri;
use Storage;
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
        
        $no = 0;
        $nama = "Bapelitbang".$no++;
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date."-".$nama.".". $ext_foto;

        $galeri = galeri::create([
        'foto'  => $request->file('foto')->storeAs('galeri', $foto_file),
        'kategori' => $request->kategori,
        ]);

    }

    public function updateGaleri($request, $id)
    {
        
        $no=0;
        $nama = "bapelitbang";
        $today = Carbon::today()->toDateString();
        $date = str_replace('-','',$today);

        $ext_foto = $request->file('foto')->getClientOriginalExtension();
        $foto_file = $date."-".$nama."-galeri"."".".". $ext_foto;

        $galeri = galeri::find($id);
        $galeri->foto = file('foto')->storeAs('galeri', $foto_file);
        $galeri->kategori = $request->input('kategori');
        $galeri->save();
    }

    public function destroyGaleri($id)
    {
        $galeri = galeri::find($id);
        $galeri->delete();
    }

    
}