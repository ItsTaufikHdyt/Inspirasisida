<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Inovasi\storeFormIndInovasiRequest;
use App\Http\Requests\Inovasi\storeFormKlpInovasiRequest;
use App\Http\Requests\Inovasi\storeFormLmbInovasiRequest;
use App\Repositories\Inovasi\FormIndInovasiRepository;
use App\Repositories\Inovasi\FormKlpInovasiRepository;
use App\Repositories\Inovasi\FormLmbInovasiRepository;

use App\Http\Requests\Penelitian\storeFormIndPenelitianRequest;
use App\Http\Requests\Penelitian\storeFormKlpPenelitianRequest;
use App\Http\Requests\Penelitian\storeFormLmbPenelitianRequest;
use App\Repositories\Penelitian\FormIndPenelitianRepository;
use App\Repositories\Penelitian\FormKlpPenelitianRepository;
use App\Repositories\Penelitian\FormLmbPenelitianRepository;

use App\Repositories\Opd\PenaOpdRepository;
use App\Http\Requests\Opd\penaOpdRequest;

use App\unitkerja;
use App\User;
use Auth;
use Alert;
use App\pendaftaran;
use App\lembaga;
use App\penaopd;
use DB;
use Yajra\DataTables\DataTables;




class SipeenaController extends Controller
{
    protected $formIndInovasiRepository;
    protected $formKlpInovasiRepository;
    protected $formLmbInovasiRepository;

    protected $formIndPenelitianRepository;
    protected $formKlpPenelitianRepository;
    protected $formLmbPenelitianRepository;

    protected $penaOpdRepository;

    public function __construct(
        FormIndInovasiRepository $formIndInovasiRepository,
        FormKlpInovasiRepository $formKlpInovasiRepository,
        FormLmbInovasiRepository $formLmbInovasiRepository,

        FormIndPenelitianRepository $formIndPenelitianRepository,
        FormKlpPenelitianRepository $formKlpPenelitianRepository,
        FormLmbPenelitianRepository $formLmbPenelitianRepository,

        PenaOpdRepository $penaOpdRepository
    ) {
        $this->middleware('auth');
        $this->formIndInovasiRepository = $formIndInovasiRepository;
        $this->formKlpInovasiRepository = $formKlpInovasiRepository;
        $this->formLmbInovasiRepository = $formLmbInovasiRepository;

        $this->formIndPenelitianRepository = $formIndPenelitianRepository;
        $this->formKlpPenelitianRepository = $formKlpPenelitianRepository;
        $this->formLmbPenelitianRepository = $formLmbPenelitianRepository;

        $this->penaOpdRepository = $penaOpdRepository;
    }

    public function index()
    {
        return view('user.daftar-peena.index');
    }

    // ---------------- Inovasi --------------------
    public function inovasi()
    {
        return view('user.daftar-peena.inovasi.index');
    }

    public function formIndInovasi()
    {
        return view('user.daftar-peena.inovasi.form-ind-inovasi');
    }

    public function storeFormIndInovasi(storeFormIndInovasiRequest $request)
    {
        try {
            $pendaftaran = $this->formIndInovasiRepository->storeIndInovasiForm($request);
            Alert::success('Inovasi Individu', 'Success');
            return view('user.daftar-peena.inovasi.form-ind-inovasi');
        } catch (Throwable $e) {
            report($e);
            Alert::error('Inovasi Individu', $e);
            return view('user.daftar-peena.inovasi.form-ind-inovasi');
        }
    }

    public function formKlpInovasi()
    {
        return view('user.daftar-peena.inovasi.form-klp-inovasi');
    }

    public function storeFormKlpInovasi(storeFormKlpInovasiRequest $request)
    {
        try {
            $pendaftaran = $this->formKlpInovasiRepository->storeKlpInovasiForm($request);
            Alert::success('Inovasi Kelompok', 'Success');
            return view('user.daftar-peena.inovasi.form-klp-inovasi');
        } catch (Throwable $e) {
            Alert::error('Inovasi Kelompok', $e);
            return view('user.daftar-peena.inovasi.form-klp-inovasi');
        }
    }

    public function formLmbInovasi()
    {
        return view('user.daftar-peena.inovasi.form-lmb-inovasi');
    }

    public function storeFormLmbInovasi(storeFormLmbInovasiRequest $request)
    {
        try {
            $lembaga = $this->formLmbInovasiRepository->storeLmbInovasiForm($request);
            Alert::success('Inovasi Lembaga', 'Success');
            return view('user.daftar-peena.inovasi.form-lmb-inovasi');
        } catch (Throwable $e) {
            Alert::error('Inovasi Lembaga', $e);
            return view('user.daftar-peena.inovasi.form-lmb-inovasi');
        }
    }

    // ---------------- Penelitian --------------------
    public function penelitian()
    {
        return view('user.daftar-peena.penelitian.index');
    }
    public function formIndPenelitian()
    {
        return view('user.daftar-peena.penelitian.form-ind-research');
    }

    public function storeFormIndPenelitian(storeFormIndPenelitianRequest $request)
    {
        try {
            $pendaftaran = $this->formIndPenelitianRepository->storeIndPenelitianForm($request);
            Alert::success('Penelitian Individu', 'Success');
            return view('user.daftar-peena.penelitian.form-ind-research');
        } catch (Throwable $e) {
            Alert::error('Penelitian Individu', $e);
            return view('user.daftar-peena.penelitian.form-ind-research');
        }
    }

    public function formKlpPenelitian()
    {
        return view('user.daftar-peena.penelitian.form-klp-research');
    }

    public function storeFormKlpPenelitian(storeFormKlpPenelitianRequest $request)
    {
        try {
            $pendaftaran = $this->formKlpPenelitianRepository->storeKlpPenelitianForm($request);
            Alert::success('Penelitian Kelompok', 'Success');
            return view('user.daftar-peena.penelitian.form-klp-research');
        } catch (Throwable $e) {
            Alert::error('Penelitian Individu', $e);
            return view('user.daftar-peena.penelitian.form-klp-research');
        }
    }

    public function formLmbPenelitian()
    {
        return view('user.daftar-peena.penelitian.form-lmb-research');
    }

    public function storeFormLmbPenelitian(storeFormLmbPenelitianRequest $request)
    {
        try {
            $lembaga = $this->formLmbPenelitianRepository->storeLmbPenelitianForm($request);
            Alert::success('Penelitian Lembaga', 'Success');
            return view('user.daftar-peena.penelitian.form-lmb-research');
        } catch (Throwable $e) {
            Alert::error('Penelitian Lembaga', $e);
            return view('user.daftar-peena.penelitian.form-lmb-research');
        }
    }

    // ---------------- Skpd ------------------------
    public function opd()
    {
        $unitkerja = unitkerja::all();
        return view('user.daftar-peena.opd.index', compact('unitkerja'));
    }

    public function storeOpd(PenaOpdRequest $request)
    {
        $unitkerja = unitkerja::all();
        try {
            $penaopd = $this->penaOpdRepository->storePenaOpd($request);
            Alert::success('OPD', 'Success');
            return view('user.daftar-peena.opd.index', compact('unitkerja'));
        } catch (Throwable $e) {
            Alert::error('OPD', $e);
            return view('user.daftar-peena.opd.index', compact('unitkerja'));
        }
    }

    // ---------------- refreshCaptcha ------------------------
    public function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('math')]);
    }

    //display proposal
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
    // ---------------- Riwayat ------------------------
    public function riwayat()
    {
        $pendaftaranInovasi = pendaftaran::where('user_id', '=', Auth::user()->id)
            ->where('kategori_peena', '=', 0)
            ->paginate(10);
        $pendaftaranPenelitian = pendaftaran::where('user_id', '=', Auth::user()->id)
            ->where('kategori_peena', '=', 1)
            ->paginate(10);
        $lembaga = lembaga::where('user_id', '=', Auth::user()->id)->paginate(10);
        $pena_opd = penaopd::where('user_id', '=', Auth::user()->id)->paginate(10);
        return view('user.akun.riwayat', compact('pendaftaranInovasi', 'pendaftaranPenelitian', 'lembaga', 'pena_opd'));
    }

    public function getPendaftaranInovasi()
    {
        $pendaftaranInovasi = pendaftaran::select('id', 'nama', 'email', 'verifikasi', 'kelompok', 'proposal', 'url_proposal', 'ket')->where('user_id', '=', Auth::user()->id)
            ->where('kategori_peena', '=', 0);

        return DataTables::of($pendaftaranInovasi)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="showInovasi" data-toggle="modal" data-target="#showDataInovasi_modal" data-id=' . $data->id . '>Show</a>';
                return $btn;
            })
            ->editColumn('url_proposal', function ($data) {
                if ($data->url_proposal != null) return '<a href="' . $data->url_proposal . '" class="btn btn-warning">View</a>';
                if ($data->url_proposal == null) return 'Data Not Found';
            })
            ->editColumn('proposal', function ($data) {
                if ($data->proposal != null) return '<a class="btn btn-warning" href="' . route('sipeena.display.proposal-pendaftaran', $data->id) . '" target="_blank">Show</a>';
                if ($data->proposal == null) return 'Data Not Found';
            })
            ->editColumn('verifikasi', function ($data) {
                if ($data->verifikasi == 0) return '<span class="badge badge-dark">Sedang Proses</span>';
                if ($data->verifikasi == 1) return '<span class="badge badge-info">ACC</span>';
                if ($data->verifikasi == -1) return '<span class="badge badge-danger">Ditolak</span>';
                if ($data->verifikasi == 2) return '<span class="badge badge-success">Finalis</span>';
            })
            ->editColumn('status', function ($data) {
                if ($data->kelompok == 0) return '<span class="badge badge-success">Individu</span>';
                if ($data->kelompok == 1) return '<span class="badge badge-warning">Kelompok</span>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function showPendaftaranInovasi($id)
    {
        $data = pendaftaran::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function getPendaftaranPenelitian()
    {
        $pendaftaranInovasi = pendaftaran::select('id', 'nama', 'email', 'verifikasi', 'proposal', 'url_proposal', 'kelompok', 'ket')->where('user_id', '=', Auth::user()->id)
            ->where('kategori_peena', '=', 1);

        return DataTables::of($pendaftaranInovasi)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="showPenelitian" data-toggle="modal" data-target="#showDataPenelitian_modal" data-id=' . $data->id . '>Show</a>';
                return $btn;
            })
            ->editColumn('url_proposal', function ($data) {
                if ($data->url_proposal != null) return '<a href="' . $data->url_proposal . '" class="btn btn-warning">View</a>';
                if ($data->url_proposal == null) return 'Data Not Found';
            })
            ->editColumn('proposal', function ($data) {
                if ($data->proposal != null) return '<a class="btn btn-warning" href="' . route('sipeena.display.proposal-pendaftaran', $data->id) . '" target="_blank">Show</a>';
                if ($data->proposal == null) return 'Data Not Found';
            })
            ->editColumn('verifikasi', function ($data) {
                if ($data->verifikasi == 0) return '<span class="badge badge-dark">Sedang Proses</span>';
                if ($data->verifikasi == 1) return '<span class="badge badge-info">ACC</span>';
                if ($data->verifikasi == -1) return '<span class="badge badge-danger">Ditolak</span>';
                if ($data->verifikasi == 2) return '<span class="badge badge-success">Finalis</span>';
            })
            ->editColumn('status', function ($data) {
                if ($data->kelompok == 0) return '<span class="badge badge-success">Individu</span>';
                if ($data->kelompok == 1) return '<span class="badge badge-warning">Kelompok</span>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function showPendaftaranPenelitian($id)
    {
        $data = pendaftaran::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function getLembaga()
    {
        $lembaga = lembaga::select('id', 'nama', 'nama_lembaga', 'verifikasi', 'email', 'proposal', 'url_proposal', 'kategori_peena', 'ket')
            ->where('user_id', '=', Auth::user()->id);

        return DataTables::of($lembaga)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="showLembaga" data-toggle="modal" data-target="#showDataLembaga_modal" data-id=' . $data->id . '>Show</a>';
                return $btn;
            })
            ->editColumn('url_proposal', function ($data) {
                if ($data->url_proposal != null) return '<a href="' . $data->url_proposal . '" class="btn btn-warning">View</a>';
                if ($data->url_proposal == null) return 'Data Not Found';
            })
            ->editColumn('proposal', function ($data) {
                if ($data->proposal != null) return '<a class="btn btn-warning" href="' . route('sipeena.display.proposal-lembaga', $data->id) . '" target="_blank">Show</a>';
                if ($data->proposal == null) return 'Data Not Found';
            })
            ->editColumn('verifikasi', function ($data) {
                if ($data->verifikasi == 0) return '<span class="badge badge-dark">Sedang Proses</span>';
                if ($data->verifikasi == 1) return '<span class="badge badge-info">ACC</span>';
                if ($data->verifikasi == -1) return '<span class="badge badge-danger">Ditolak</span>';
                if ($data->verifikasi == 2) return '<span class="badge badge-success">Finalis</span>';
            })
            ->editColumn('kategori_peena', function ($data) {
                if ($data->kategori_peena == 0) return '<span class="badge badge-success">Inovasi</span>';
                if ($data->kategori_peena == 1) return '<span class="badge badge-warning">Lembaga</span>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function showLembaga($id)
    {
        $data = lembaga::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }

    public function getOpd()
    {
        $lembaga = penaopd::select('id', 'nama', 'tgjawab', 'nip', 'jabatan', 'email', 'verifikasi',)
            ->where('user_id', '=', Auth::user()->id);

        return DataTables::of($lembaga)
            ->addIndexColumn()
            ->editColumn('action', function ($data) {
                $btn = '<a href="" class="btn btn-warning" id="showOpd" data-toggle="modal" data-target="#showDataOpd_modal" data-id=' . $data->id . '>Show</a>';
                return $btn;
            })
            ->editColumn('url_proposal', function ($data) {
                if ($data->url_proposal != null) return '<a href="' . $data->url_proposal . '" class="btn btn-warning">View</a>';
                if ($data->url_proposal == null) return 'Data Not Found';
            })
            ->editColumn('proposal', function ($data) {
                if ($data->proposal != null) return '<a class="btn btn-warning" href="' . route('sipeena.display.proposal-penaopd', $data->id) . '" target="_blank">Show</a>';
                if ($data->proposal == null) return 'Data Not Found';
            })
            ->editColumn('verifikasi', function ($data) {
                if ($data->verifikasi == 0) return '<span class="badge badge-dark">Sedang Proses</span>';
                if ($data->verifikasi == 1) return '<span class="badge badge-info">ACC</span>';
                if ($data->verifikasi == -1) return '<span class="badge badge-danger">Ditolak</span>';
                if ($data->verifikasi == 2) return '<span class="badge badge-success">Finalis</span>';
            })
            ->rawColumns(['action'])
            ->escapeColumns([])
            ->make(true);
    }

    public function showOpd($id)
    {
        $data = penaopd::find($id);
        return response()->json([
            'success' => true,
            'data' => $data,
        ]);
    }


    // ---------------- Profil ------------------------
    public function profil()
    {
        return view('user.akun.profil');
    }

    // ---------------- UpdateProfil ------------------------
    public function updateProfil(Request $request, $id)
    {

        $getUser = Auth::user()->id;
        $data = [];
        if ($request->has('username')) {
            $data['username'] = $request->username;
        }
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }
        $tes = DB::table('users')
            ->where('id', $getUser)
            ->update($data);
        Alert::success('Update Profile', 'Success');
        return redirect()->route('profil');
    }
}
