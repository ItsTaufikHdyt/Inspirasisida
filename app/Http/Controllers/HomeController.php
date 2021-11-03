<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\prosedur;
use Storage;
use App\dbmasyarakat;
use App\dbopd;
use App\galeri;
use Yajra\DataTables\DataTables;


class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $galeri_foto = galeri::where('kategori', '0')->get();
        $galeri_poster = galeri::where('kategori', '1')->get();
        $prosedur = prosedur::all();
        return view('index', compact('prosedur', 'galeri_foto', 'galeri_poster'));
    }

    public function showMore($id)
    {
        $prosedur = prosedur::find($id);
        return view('user.berita-terbaru.index', compact('prosedur'));
    }

    public function downloadProsedur($id)
    {
        $prosedur = prosedur::find($id);
        return Storage::download($prosedur->berkas);
    }

    public function dbMasyarakatInovasi()
    {
        $dbmasyarakat = dbmasyarakat::where('kategori', 0)->orderBy('tahun', 'desc')->get();
        return view('database.dbmasyarakatinovasi', compact('dbmasyarakat'));
    }

    public function getDbMasyarakatInovasi()
    {
        $dbmasyarakat = dbmasyarakat::select('id', 'judul', 'tahun', 'nama', 'lokasi', 'abstraksi', 'kategori')
            ->where('kategori', 0)
            ->orderBy('tahun', 'desc');
        return DataTables::of($dbmasyarakat)
            ->addIndexColumn()
            ->editColumn('judul', function ($data) {
                return '<a href="" id="showDbMasyarakatInovasi" data-toggle="modal" data-target="#show_modal" data-id=' . $data->id . '>' . $data->nama . '</a>';
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function showDbMasyarakatInovasi($id)
    {
        $data = dbmasyarakat::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function dbMasyarakatPenelitian()
    {
        $dbmasyarakat = dbmasyarakat::where('kategori', 1)->orderBy('tahun', 'desc')->get();
        return view('database.dbmasyarakatpenelitian', compact('dbmasyarakat'));
    }

    public function getDbMasyarakatPenelitian()
    {
        $dbmasyarakat = dbmasyarakat::select('id', 'judul', 'tahun', 'nama', 'lokasi', 'abstraksi', 'kategori')
            ->where('kategori', 1)
            ->orderBy('tahun', 'desc');
        return DataTables::of($dbmasyarakat)
            ->addIndexColumn()
            ->editColumn('judul', function ($data) {
                return '<a href="" id="showDbMasyarakatPenelitian" data-toggle="modal" data-target="#show_modal" data-id=' . $data->id . '>' . $data->nama . '</a>';
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function showDbMasyarakatPenelitian($id)
    {
        $data = dbmasyarakat::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function dbOpdInovasi()
    {
        $dbopd = dbopd::where('kategori', 0)->orderBy('tahun', 'desc')->get();
        return view('database.dbopdinovasi', compact('dbopd'));
    }

    public function getDbOpdInovasi()
    {
        $dbopd = dbopd::select('id', 'judul', 'tahun', 'opd', 'lokasi', 'berkas', 'abstraksi', 'kategori')
            ->where('kategori', 0)
            ->orderBy('tahun', 'desc');
        return DataTables::of($dbopd)
            ->addIndexColumn()
            ->editColumn('judul', function ($data) {
                return '<a href="" id="showDbOpdInovasi" data-toggle="modal" data-target="#show_modal" data-id=' . $data->id . '>' . $data->judul . '</a>';
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function showDbOpdInovasi($id)
    {
        $data = dbopd::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function dbOpdPenelitian()
    {
        $dbopd = dbopd::where('kategori', 1)->orderBy('tahun', 'desc')->get();
        return view('database.dbopdpenelitian', compact('dbopd'));
    }

    public function getDbOpdPenelitian()
    {
        $dbopd = dbopd::select('id', 'judul', 'tahun', 'opd', 'lokasi', 'berkas', 'abstraksi', 'kategori')
            ->where('kategori', 1)
            ->orderBy('tahun', 'desc');
        return DataTables::of($dbopd)
            ->addIndexColumn()
            ->editColumn('judul', function ($data) {
                return '<a href="" id="showDbOpdPenelitian" data-toggle="modal" data-target="#show_modal" data-id=' . $data->id . '>' . $data->judul . '</a>';
            })
            ->escapeColumns([])
            ->make(true);
    }

    public function showDbOpdPenelitian($id)
    {
        $data = dbopd::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function downloadDbOpd($id)
    {
        $dbopd = dbopd::find($id);
        return storage::download($dbopd->berkas);
    }

    public function panduan()
    {
        return response()->download(storage_path("app/panduan/panduan-sipeena.pdf"));
    }
}
