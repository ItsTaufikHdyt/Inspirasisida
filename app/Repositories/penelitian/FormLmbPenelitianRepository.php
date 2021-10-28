<?php 

namespace App\Repositories\Penelitian;

// use Illuminate\Database\Eloquent\Model;
use App\Repositories\Core\Penelitian\FormLmbPenelitianRepositoryInterface;
use Illuminate\Http\Request;
use App\User;
use App\lembaga;
use Auth;
use Storage;
use Carbon\Carbon;
use DB;

class FormLmbPenelitianRepository implements FormLmbPenelitianRepositoryInterface
{

    protected $lembaga;

    public function __contruct(lembaga $lembaga)
    {
        $this->lembaga = $lembaga;
    }

    public function storeLmbPenelitianForm($request)
    {
        $data = [
            'nama'               => $request->nama,
            'nama_lembaga'       => $request->nama_lembaga,
            'email'              => $request->email,
            'telp'               => $request->telp,
            'alamat'             => $request->alamat,
            'user_id'            => Auth::user()->id,
            'verifikasi'         => 0,
            'kategori_peena'     => 1,
            'created_at' =>  Carbon::now(), # new \Datetime()
            'updated_at' => Carbon::now(),
        ];
        if ($request->has('proposal')) {
            $nama = str_replace(' ', '-', $request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            //ktp
            $ext_ktp = $request->file('ktp')->getClientOriginalExtension();
            $ktp_file = $date . "-" . $nama . "-ktp" . "" . "." . $ext_ktp;
            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date . "-" . $nama . "-surat-pernyataan" . "" . "." . $ext_surat_pernyataan;
            //proposal
            $ext_proposal = $request->file('proposal')->getClientOriginalExtension();
            $proposal_file = $date . "-" . $nama . "-proposal" . "" . "." . $ext_proposal;
            $request->file('ktp')->storeAs('ktp', $ktp_file);
            $data['ktp'] = $ktp_file;
            $request->file('surat_pernyataan')->storeAs('public/surat-pernyataan', $surat_pernyataan_file);
            $data['surat_pernyataan'] = $surat_pernyataan_file;
            $request->file('proposal')->storeAs('proposal', $proposal_file);
            $data['proposal'] = $proposal_file;
        }
        if ($request->has('url_proposal')) {
            $nama = str_replace(' ', '-', $request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);
            //ktp
            $ext_ktp = $request->file('ktp')->getClientOriginalExtension();
            $ktp_file = $date . "-" . $nama . "-ktp" . "" . "." . $ext_ktp;
            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date . "-" . $nama . "-surat-pernyataan" . "" . "." . $ext_surat_pernyataan;
            $request->file('ktp')->storeAs('ktp', $ktp_file);
            $data['ktp'] = $ktp_file;
            $request->file('surat_pernyataan')->storeAs('public/surat-pernyataan', $surat_pernyataan_file);
            $data['surat_pernyataan'] = $surat_pernyataan_file;
            $data['url_proposal'] = $request->url_proposal;
        }
        DB::table('lembaga')->insert($data);
    }

}