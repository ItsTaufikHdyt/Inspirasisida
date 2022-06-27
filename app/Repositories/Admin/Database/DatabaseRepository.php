<?php

namespace App\Repositories\Admin\Database;

use App\Repositories\Admin\Core\Database\DatabaseRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\dbmasyarakat;
use App\dbopd;
use Carbon\carbon;
use DB;

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
        if ($request->kategori === '0' && $request->berkas === null) {
            $dbopd = dbopd::create([
                'judul'      => $request->judul,
                'tahun'      => $request->tahun,
                'opd'        => $request->opd,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => null
            ]);
        } elseif ($request->kategori === '0' && $request->berkas != null) {
            $nama = str_replace(' ', '', $request->file('berkas')->getClientOriginalName());
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            $rand = rand(0, 99999);
            $berkas = $date . "-" . $rand . "-" . $nama;

            $dbopd = dbopd::create([
                'judul'      => $request->judul,
                'tahun'      => $request->tahun,
                'opd'        => $request->opd,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => $request->file('berkas')->storeAs('database-opd/inovasi', $berkas),
            ]);
        } elseif ($request->kategori === '1' && $request->berkas != null) {
            $nama = str_replace(' ', '', $request->file('berkas')->getClientOriginalName());
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            $rand = rand(0, 99999);
            $berkas = $date . "-" . $rand . "-" . $nama;

            $dbopd = dbopd::create([
                'judul'      => $request->judul,
                'tahun'      => $request->tahun,
                'opd'        => $request->opd,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => $request->file('berkas')->storeAs('database-opd/penelitian', $berkas),
            ]);
        } else {
            $dbopd = dbopd::create([
                'judul'      => $request->judul,
                'tahun'      => $request->tahun,
                'opd'        => $request->opd,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => null
            ]);
        }
    }

    public function updateDbOpd($request, $id)
    {

        $cek_dbopd = dbopd::find($id);
        $id = $request->id;
        $update = [
            'judul' => $request->judul,
            'tahun' => $request->tahun,
            'opd' => $request->opd,
            'lokasi' => $request->lokasi,
            'abstraksi' => $request->abstraksi,
            'kategori' => $request->kategori
        ];

        $file   = $request->file("berkas");
        if ($request->hasfile("berkas")) {
            Storage::delete($cek_dbopd->berkas);
            $nama = str_replace(' ', '', $request->file('berkas')->getClientOriginalName());
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            $rand = rand(0, 99999);
            $berkas = $date . "-" . $rand . "-" . $nama;
            $update['berkas'] = $request->file('berkas')->storeAs('/database-opd', $berkas);
        }
        DB::table('dbopd')->where('id', $id)->update($update);
    }

    public function downloadDbOpd($id)
    {
        try {
            $dbopd = dbopd::find($id);
            return storage::download($dbopd->berkas);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function destroyDbOpd($id)
    {
        try {
            $dbopd = dbopd::find($id);
            Storage::delete($dbopd->berkas);
            $dbopd->delete();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    //----------------- DB Masyarakat -----------------

    public function storeDbMasyarakat($request)
    {
        if ($request->kategori === '0' && $request->berkas === null) {
            $dbmasyarakat = dbmasyarakat::create([
                'judul'      => $request->judul,
                'nama'       => $request->nama,
                'tahun'      => $request->tahun,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => null
            ]);
        } elseif ($request->kategori === '0' && $request->berkas != null) {
            $nama = str_replace(' ', '', $request->file('berkas')->getClientOriginalName());
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            $rand = rand(0, 99999);
            $berkas = $date . "-" . $rand . "-" . $nama;

            $dbmasyarakat = dbmasyarakat::create([
                'judul'      => $request->judul,
                'nama'       => $request->nama,
                'tahun'      => $request->tahun,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => $request->file('berkas')->storeAs('database-masyarakat/inovasi', $berkas),
            ]);
        } elseif ($request->kategori === '1' && $request->berkas != null) {
            $nama = str_replace(' ', '', $request->file('berkas')->getClientOriginalName());
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            $rand = rand(0, 99999);
            $berkas = $date . "-" . $rand . "-" . $nama;

            $dbmasyarakat = dbmasyarakat::create([
                'judul'      => $request->judul,
                'nama'       => $request->nama,
                'tahun'      => $request->tahun,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => $request->file('berkas')->storeAs('database-masyarakat/penelitian', $berkas),
            ]);
        } else {
            $dbmasyarakat = dbmasyarakat::create([
                'judul'      => $request->judul,
                'nama'       => $request->nama,
                'tahun'      => $request->tahun,
                'lokasi'     => $request->lokasi,
                'abstraksi'  => $request->abstraksi,
                'kategori'   => $request->kategori,
                'berkas'     => null
            ]);
        }
    }

    public function updateDbMasyarakat($request, $id)
    {
        $dbmasyarakat = dbmasyarakat::find($id);
        $dbmasyarakat->judul = $request->input('judul');
        $dbmasyarakat->nama = $request->input('nama');
        $dbmasyarakat->tahun = $request->input('tahun');
        $dbmasyarakat->lokasi = $request->input('lokasi');
        $dbmasyarakat->abstraksi = $request->input('abstraksi');
        $dbmasyarakat->kategori = $request->input('kategori');
        $dbmasyarakat->save();
    }

    public function destroyDbMasyarakat($id)
    {
        try {
            $dbmasyarakat = dbmasyarakat::find($id);
            Storage::delete($dbmasyarakat->berkas);
            $dbmasyarakat->delete();
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function downloadDbMasyarakat($id)
    {
        try {
            $dbmasyarakat = dbmasyarakat::find($id);
            return storage::download($dbmasyarakat->berkas);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
