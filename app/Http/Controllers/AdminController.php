<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Admin\Database\storeDbMasyarakatRequest;
use App\Http\Requests\Admin\Database\storeDbOpdRequest;

use App\Http\Requests\Admin\Opd\storeDataOpdRequest;
use App\Repositories\Admin\Opd\DataOpdRepository;

use App\Http\Requests\Admin\Prosedur\storeProsedurRequest;
use App\Repositories\Admin\Prosedur\ProsedurRepository;

use App\Repositories\Admin\DataSipeena\DataSipeenaRepository;

use App\Repositories\Admin\Database\DatabaseRepository;

use App\Http\Requests\Admin\Galeri\storeGaleriRequest;
use App\Repositories\Admin\Galeri\GaleriRepository;

use App\Repositories\Admin\User\UserRepository;

use RealRashid\SweetAlert\Facades\Alert;

use App\Exceptions\Handler;

use Illuminate\Support\Facades\Mail;
use App\Mail\VerifikasiSipeenaUmum;
use Illuminate\Support\Str;
use App\prosedur;
use App\unitkerja;
use App\pendaftaran;
use App\lembaga;
use App\penaopd;
use App\dbopd;
use App\dbmasyarakat;
use App\galeri;
use App\user;
use Storage;
use Yajra\DataTables\DataTables;
use DB;

class AdminController extends Controller
{
    protected $dataSipeenaRepository;
    protected $dataOpdRepository;
    protected $prosedurRepository;
    protected $databaseRepository;
    protected $galeriRepository;
    protected $userRepository;

    public function __construct(
        DataSipeenaRepository $dataSipeenaRepository,
        DataOpdRepository $dataOpdRepository,
        ProsedurRepository $prosedurRepository,
        DatabaseRepository $databaseRepository,
        GaleriRepository $galeriRepository,
        UserRepository $userRepository
    ) {
        $this->middleware('auth');
        $this->dataSipeenaRepository = $dataSipeenaRepository;
        $this->dataOpdRepository = $dataOpdRepository;
        $this->prosedurRepository = $prosedurRepository;
        $this->databaseRepository = $databaseRepository;
        $this->galeriRepository = $galeriRepository;
        $this->userRepository = $userRepository;
    }


    public function index()
    {
        $inovasi = pendaftaran::where('kategori_peena', '=', 0)->count();
        $penelitian = pendaftaran::where('kategori_peena', '=', 1)->count();
        $penaopd = penaopd::count();
        return view('admin.index', ['inovasi' => $inovasi, 'penelitian' => $penelitian, 'penaopd' => $penaopd]);
    }

    // ---------------- Data SiPeena ------------------------

    // ---------------- Download Pendaftaran ------------------------
    public function downloadKtpPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return Storage::download($pendaftaran->ktp);
    }

    public function downloadSuratPernyataanPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return Storage::download($pendaftaran->surat_pernyataan);
    }

    public function downloadIzinOrtuPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return Storage::download($pendaftaran->izin_ortu);
    }

    public function downloadIzinSekolahPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return Storage::download($pendaftaran->izin_sekolah);
    }

    public function downloadProposalPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return Storage::download($pendaftaran->proposal);
    }

    public function verifikasi()
    {
        $perorangan = pendaftaran::where('kelompok', '=', 0)
            ->where('verifikasi', '=', 0)
            ->get();
        $kelompok = pendaftaran::where('kelompok', '=', 1)
            ->where('verifikasi', '=', 0)
            ->get();
        $lembaga = lembaga::where('verifikasi', 0)->get();
        $pena_opd = penaopd::where('verifikasi', 0)->get();
        return view('admin.data-sipeena.verifikasi', compact('perorangan', 'kelompok', 'lembaga', 'pena_opd'));
    }
    //-------------------- Verifikasi -------------------
    public function verifikasiPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return view('admin.data-sipeena.verifikasi.verifikasi-pendaftaran', compact('pendaftaran'));
    }

    public function verifikasiLembaga($id)
    {
        $lembaga = lembaga::find($id);
        return view('admin.data-sipeena.verifikasi.verifikasi-lembaga', compact('lembaga'));
    }

    public function verifikasiOpd($id)
    {
        $penaopd = penaopd::find($id);
        return view('admin.data-sipeena.verifikasi.verifikasi-opd', compact('penaopd'));
    }
    //--------------------- Update Verifikasi --------------
    public function updateVerifikasiPendaftaran(Request $request, $id)
    {
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->verifikasi = $request->kdverif;
        $pendaftaran->ket = $request->komen;
        $pendaftaran->save();

        // Mail::to($pendaftaran->email)->send(new VerifikasiSipeenaUmum($pendaftaran));

        Alert::success('Verifikasi', 'Success');
        return redirect()->route('admin.verifikasi');
    }

    public function updateVerifikasiLembaga(Request $request, $id)
    {
        $lembaga = lembaga::find($id);
        $lembaga->verifikasi = $request->kdverif;
        $lembaga->ket = $request->komen;
        $lembaga->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateVerifikasiOpd(Request $request, $id)
    {
        $opd = penaopd::find($id);
        $opd->verifikasi = $request->kdverif;
        $opd->ket = $request->komen;
        $opd->save();
        return redirect()->route('admin.verifikasi');
    }
    //-------------------- ACC -------------------
    public function accPendaftaran($id)
    {

        $pendaftaran = pendaftaran::find($id);
        return view('admin.data-sipeena.verifikasi.acc-pendaftaran', compact('pendaftaran'));
    }

    public function accLembaga($id)
    {
        $lembaga = lembaga::find($id);
        return view('admin.data-sipeena.verifikasi.acc-lembaga', compact('lembaga'));
    }

    public function accOpd($id)
    {
        $penaopd = penaopd::find($id);
        return view('admin.data-sipeena.verifikasi.acc-opd', compact('penaopd'));
    }
    //----------------------- Display Proposal -----------
    public function displayProposalPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return response()->file('Storage/proposal/' . $pendaftaran->proposal);
    }
    public function displayProposalLembaga($id)
    {
        $lembaga = lembaga::find($id);
        return response()->file('Storage/proposal/' . $lembaga->proposal);
    }
    public function displayProposalOPD($id)
    {
        $pena_opd = penaopd::find($id);
        return response()->file('Storage/proposal/' . $pena_opd->proposal);
    }
    public function displaySuratPernyataanOPD($id)
    {
        $pena_opd = penaopd::find($id);
        return response()->file('Storage/surat-pernyataan/' . $pena_opd->surat_pernyataan);
    }
    //--------------------- Update ACC --------------
    public function updateAccPendaftaran(Request $request, $id)
    {
        $pendaftaran = pendaftaran::find($id);
        $pendaftaran->verifikasi = $request->kdverif;
        $pendaftaran->ket = $request->komen;
        $pendaftaran->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateAccLembaga(Request $request, $id)
    {
        $lembaga = lembaga::find($id);
        $lembaga->verifikasi = $request->kdverif;
        $lembaga->ket = $request->komen;
        $lembaga->save();
        return redirect()->route('admin.verifikasi');
    }

    public function updateAccOpd(Request $request, $id)
    {
        $opd = penaopd::find($id);
        $opd->verifikasi = $request->kdverif;
        $opd->ket = $request->komen;
        $opd->save();
        return redirect()->route('admin.verifikasi');
    }
    //-------------------- Finalis -------------------
    public function finalPendaftaran($id)
    {
        $pendaftaran = pendaftaran::find($id);
        return view('admin.data-sipeena.verifikasi.final-pendaftaran', compact('pendaftaran'));
    }

    public function finalLembaga($id)
    {
        $lembaga = lembaga::find($id);
        return view('admin.data-sipeena.verifikasi.final-lembaga', compact('lembaga'));
    }

    public function finalOpd($id)
    {
        $penaopd = penaopd::find($id);
        return view('admin.data-sipeena.verifikasi.final-opd', compact('penaopd'));
    }
    //----------------------- Destroy -----------------------
    public function destroySipeenaPendaftaran($id)
    {
        $pendaftaran = $this->dataSipeenaRepository->destroySipeenaPendaftaran($id);
        return redirect()->route('admin.verifikasi');
    }

    public function destroySipeenaLembaga($id)
    {
        $lembaga = $this->dataSipeenaRepository->destroySipeenaLembaga($id);
        return redirect()->route('admin.verifikasi');
    }

    public function destroySipeenaOpd($id)
    {
        $opd = $this->dataSipeenaRepository->destroySipeenaOpd($id);
        return redirect()->route('admin.verifikasi');
    }

    public function diterima()
    {
        $perorangan = pendaftaran::where('kelompok', '=', 0)
            ->where('verifikasi', '=', 1)
            ->get();
        $kelompok = pendaftaran::where('kelompok', '=', 1)
            ->where('verifikasi', '=', 1)
            ->get();
        $lembaga = lembaga::where('verifikasi', 1)->get();
        $pena_opd = penaopd::where('verifikasi', 1)->get();
        return view('admin.data-sipeena.diterima', compact('perorangan', 'kelompok', 'lembaga', 'pena_opd'));
    }

    public function ditolak()
    {
        $perorangan = pendaftaran::where('kelompok', '=', 0)
            ->where('verifikasi', '=', -1)
            ->get();
        $kelompok = pendaftaran::where('kelompok', '=', 1)
            ->where('verifikasi', '=', -1)
            ->get();
        $lembaga = lembaga::where('verifikasi', -1)->get();
        $pena_opd = penaopd::where('verifikasi', -1)->get();
        return view('admin.data-sipeena.ditolak', compact('perorangan', 'kelompok', 'lembaga', 'pena_opd'));
    }

    public function finalis()
    {
        $perorangan = pendaftaran::where('kelompok', '=', 0)
            ->where('verifikasi', '=', 2)
            ->get();
        $kelompok = pendaftaran::where('kelompok', '=', 1)
            ->where('verifikasi', '=', 2)
            ->get();
        $lembaga = lembaga::where('verifikasi', 2)->get();
        $pena_opd = penaopd::where('verifikasi', 2)->get();
        return view('admin.data-sipeena.finalis', compact('perorangan', 'kelompok', 'lembaga', 'pena_opd'));
    }

    // ---------------- Prosedur ------------------------
    public function prosedur()
    {
        $prosedur = prosedur::all();
        return view('admin.prosedur.index', compact('prosedur'));
    }

    public function getProsedur()
    {
        $opd = prosedur::select('id', 'judul_prosedur', 'narasi', 'foto', 'berkas', 'created_at', 'updated_at');
        return DataTables::of($opd)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="editProsedur" data-toggle="modal" data-target="#prosedur_modal" data-id=' . $data->id . '>Edit</a>';
                $btn =  $btn . ' <a href="" class="btn btn-primary" id="showProsedur" data-toggle="modal" data-target="#show_modal" data-id=' . $data->id . '>Show</a>';
                $btn = $btn . ' <button onclick="deleteItem(this)" class="btn btn-danger" data-id=' . $data->id . '>Delete</button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function storeProsedur(storeProsedurRequest $request)
    {
        $prosedur = $this->prosedurRepository->storeProsedur($request);
        return redirect()->route('admin.prosedur');
    }

    public function editProsedur($id)
    {
        $prosedur = prosedur::find($id);
        return response()->json([
            'data' => $prosedur
        ]);
    }

    public function updateProsedur(storeProsedurRequest $request, $id)
    {
        $prosedur = $this->prosedurRepository->updateProsedur($request, $id);
        return response()->json([
            'success' => true,
        ]);
    }

    public function destroyProsedur($id)
    {
        $prosedur = $this->prosedurRepository->destroyProsedur($id);
        return response()->json([
            'success' => true,
        ]);
    }

    // ---------------- OPD ------------------------
    public function opd()
    {
        $opd = unitkerja::all();
        return view('admin.opd.index', compact('opd'));
    }

    public function getOpd()
    {
        $opd = unitkerja::select('id', 'nama_uk');
        return DataTables::of($opd)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="editOpd" data-toggle="modal" data-target="#opd_modal" data-id=' . $data->id . '>Edit</a>';
                $btn = $btn . ' <button onclick="deleteItem(this)" class="btn btn-danger" data-id=' . $data->id . '>Delete</button>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function editOpd($id)
    {
        $unitkerja = unitkerja::find($id);
        return response()->json([
            'data' => $unitkerja
        ]);
    }
    public function storeOpd(storeDataOpdRequest $request)
    {
        $unitkerja = $this->dataOpdRepository->storeOpd($request);
        return redirect()->route('admin.opd');
    }

    public function updateOpd(storeDataOpdRequest $request, $id)
    {
        $unitkerja = $this->dataOpdRepository->updateOpd($request, $id);
        return response()->json(['success' => true]);
    }

    public function destroyOpd($id)
    {
        $unitkerja = $this->dataOpdRepository->destroyOpd($id);
        return response()->json(['success' => true]);
    }

    // ---------------- Database ------------------------
    public function database()
    {
        $dbopd = dbopd::all();
        $dbmasyarakat = dbmasyarakat::all();
        return view('admin.database.index', compact('dbopd', 'dbmasyarakat'));
    }

    public function getDatabaseMasyarakat()
    {
        $dbmasyarakat = dbmasyarakat::select('id','judul','tahun','nama','lokasi','abstraksi','kategori');
        return DataTables::of($dbmasyarakat)
        ->addIndexColumn()
        ->editColumn('action', function ($data) {
            $btn = '<a href="" class="btn btn-warning" id="editDbMasyarakat" data-toggle="modal" data-target="#dbmasyarakat_modal" data-id=' . $data->id . '>Edit</a>';
            $btn = $btn.' <button onclick="deleteItem(this)" class="btn btn-danger" data-id=' . $data->id . '>Delete</button>';
            return $btn;
        })
        ->editColumn('abstraksi', function ($data) {
            return Str::limit($data->abstraksi,50);
        })
        ->editColumn('kategori', function ($data) {
            if ($data->kategori == 0) return '<span class="badge badge-success">Inovasi</span>';
            if ($data->kategori == 1) return '<span class="badge badge-warning">Penelitian</span>';
        })
        ->rawColumns(['action'])
        ->escapeColumns([])
        ->make(true);
    }
    // ---------------- Database OPD ------------------------
    public function storeDbOpd(storeDbOpdRequest $request)
    {
        $dbopd = $this->databaseRepository->storeDbOpd($request);
        return redirect()->route('admin.database');
    }

    public function updateDbOpd(storeDbOpdRequest $request, $id)
    {
        $dbopd = $this->databaseRepository->updateDbOpd($request, $id);
        return response()->json([
            'success' => true
        ]);
    }

    public function destroyDbOpd($id)
    {
        $dbopd = $this->databaseRepository->destroyDbOpd($id);
        return response()->json([
            'success' => true
        ]);
    }

    public function downloadDbOpd($id)
    {
        $dbopd = $this->databaseRepository->downloadDbOpd($id);
    }

    // ---------------- Database Masyarakat Inovasi ------------------------
    public function storeDbMasyarakat(storeDbMasyarakatRequest $request)
    {
        $dbmasyarakat = $this->databaseRepository->storeDbMasyarakat($request);
        return redirect()->route('admin.database');
    }

    public function updateDbMasyarakat(storeDbMasyarakatRequest $request, $id)
    {
        $dbmasyarakat = $this->databaseRepository->updateDbMasyarakat($request, $id);
        return response()->json([
            'success' => true
        ]);
    }

    public function editDbMasyarakat($id)
    {
        $dbmasyarakat = dbmasyarakat::find($id);
        return response()->json([
            'success' => true,
            'data' => $dbmasyarakat
        ]);
    }

    public function destroyDbMasyarakat($id)
    {
        $dbmasyarakat = $this->databaseRepository->destroyDbMasyarakat($id);
        return response()->json([
            'success' => true
        ]);
    }
    // ---------------- Galeri ------------------------
    public function galeri()
    {
        $galeri =  galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function getGaleri()
    {
        $galeri =  galeri::select('id', 'foto', 'kategori', 'created_at', 'updated_at');
        return DataTables::of($galeri)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<button onclick="deleteItem(this)" class="btn btn-danger" data-id=' . $data->id . '>Delete</button>';
                return $btn;
            })
            ->editColumn('kategori', function ($data) {
                if ($data->kategori == 0) return '<span class="badge badge-success">Foto</span>';
                if ($data->kategori == 1) return '<span class="badge badge-warning">Poster</span>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function storeGaleri(storeGaleriRequest $request)
    {

        try {
            $galeri = $this->galeriRepository->storeGaleri($request);
            alert()->success('Galeri', 'Upload Galeri Berhasil');
            return redirect()->route('admin.galeri');
        } catch (Exception $e) {

            return 'Eror';
        }
    }

    public function editGaleri($id)
    {
        $galeri = galeri::find($id);
        return response()->json([
            'success' => true,
            'data' => $galeri,
        ]);
    }

    public function destroyGaleri($id)
    {
        $galeri = $this->galeriRepository->destroyGaleri($id);
        return response()->json([
            'success' => true
        ]);
    }
    // ---------------- Activated User ------------------------
    public function user()
    {
        $user =  user::where('level', '=', 2)->get();

        return view('admin.user.index', compact('user'));
    }

    public function getUser()
    {
        $user =  user::select('id', 'username', 'nama', 'email', 'level', 'email_verified', 'last_login');
        return DataTables::of($user)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="editUser" data-toggle="modal" data-target="#user_modal" data-id=' . $data->id . '>Edit</a>';
                $btn = $btn . ' <button onclick="deleteItem(this)" class="btn btn-danger" data-id=' . $data->id . '>Delete</button>';
                return $btn;
            })
            ->editColumn('level', function ($data) {
                if ($data->level == 1) return '<span class="badge badge-success">Admin</span>';
                if ($data->level == 2) return '<span class="badge badge-primary">User</span>';
            })
            ->editColumn('status', function ($data) {
                if ($data->email_verified == 0) return '<span class="badge badge-danger">Tidak Aktif</span>';
                if ($data->email_verified == 1) return '<span class="badge badge-info">Aktif</span>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function editUser($id)
    {
        $user = user::find($id);
        return response()->json([
            'success' => true,
            'data' => $user,
        ]);
    }

    public function activatedUser(request $request, $id)
    {
        $user = $this->userRepository->activatedUser($request, $id);
        return response()->json([
            'success' => true
        ]);
    }

    public function destroyUser($id)
    {
        $user = $this->userRepository->destroyUser($id);
        return response()->json([
            'success' => true
        ]);
    }
    
}
