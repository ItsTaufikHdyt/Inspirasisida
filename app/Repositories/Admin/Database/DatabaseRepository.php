<?php

namespace App\Repositories\Admin\Database;

use App\Repositories\Admin\Core\Database\DatabaseRepositoryInterface;
use Illuminate\Http\Request;
use App\dbmasyarakat;
use App\dbopd;

class DatabaseRepository implements DatabaseRepositoryInterface
{

protected $dbmasyarakat;
protected $dbopd;

    public function __contruct(dbmasyarakat $dbmasyarakat, dbopd $dbopd)
    {
        $this->dbmasyarakat = $dbmasyarakat;
        $this->dbopd = $dbopd;
    }

    //----------------- DB Opd -----------------

    public function storeDbOpd($request)
    {
        $dbopd = dbopd::create([
        'judul'      => $request->judul,
        'tahun'      => $request->tahun,
        'opd'        => $request->opd,
        'lokasi'     => $request->lokasi,
        'abstraksi'  => $request->abstraksi,
        'kategori'   => $request->kategori,
        ]);
    }

    public function updateDbOpd($request, $id)
    {
        $dbopd = dbopd::find($id);
        $dbopd->judul = $request->input('judul');
        $dbopd->tahun = $request->input('tahun');
        $dbopd->opd = $request->input('opd');
        $dbopd->lokasi = $request->input('lokasi');
        $dbopd->abstraksi = $request->input('abstraksi');
        $dbopd->kategori = $request->input('kategori');
        $dbopd->save();
    }

    public function destroyDbOpd($id)
    {
        $dbopd = dbopd::find($id);
        $dbopd->delete();
    }


    //----------------- DB Masyarakat -----------------

    public function storeDbMasyarakat($request)
    {
        $dbmasyarakat = dbmasyarakat::create([
        'judul'      => $request->judul,
        'nama'      => $request->nama,
        'lokasi'     => $request->lokasi,
        'abstraksi'  => $request->abstraksi,
        'kategori'   => $request->kategori,
        ]);
    }

    public function updateDbMasyarakat($request, $id)
    {
        $dbmasyarakat = dbmasyarakat::find($id);
        $dbmasyarakat->judul = $request->input('judul');
        $dbmasyarakat->nama = $request->input('nama');
        $dbmasyarakat->lokasi = $request->input('lokasi');
        $dbmasyarakat->abstraksi = $request->input('abstraksi');
        $dbmasyarakat->kategori = $request->input('kategori');
        $dbmasyarakat->save();
    }

    public function destroyDbMasyarakat($id)
    {
        $dbmasyarakat = dbmasyarakat::find($id);
        $dbmasyarakat->delete();
    }

}