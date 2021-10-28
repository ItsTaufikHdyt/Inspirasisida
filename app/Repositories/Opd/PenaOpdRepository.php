<?php

namespace App\Repositories\Opd;

use App\Repositories\Core\Opd\PenaOpdRepositoryInterface;
use Illuminate\Http\Request;
use App\penaopd;
use Auth;
use Storage;
use Carbon\Carbon;
use DB;

class PenaOpdRepository implements PenaOpdRepositoryInterface
{
    protected $penaopd;

    public function __contruct(penaopd $penaopd)
    {
        $this->penaopd = $penaopd;
    }

    public function storePenaOpd($request)
    {
        $data = [
            'nama'                  => $request->nama,
            'tgjawab'               => $request->tgjawab,
            'nip'                   => $request->nip,
            'jabatan'               => $request->jabatan,
            'email'                 => $request->email,
            'telp'                  => $request->telp,
            'alamat'                => $request->alamat,
            'user_id'            => Auth::user()->id,
            'verifikasi'            => 0,
            'created_at' =>  Carbon::now(), # new \Datetime()
            'updated_at' => Carbon::now(),
        ];

        if ($request->has('proposal')) {
            $nama = str_replace(' ', '-', $request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);

            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date . "-" . $nama . "-surat-pernyataan" . "" . "." . $ext_surat_pernyataan;
            //proposal
            $ext_proposal = $request->file('proposal')->getClientOriginalExtension();
            $proposal_file = $date . "-" . $nama . "-proposal" . "" . "." . $ext_proposal;
            $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file);
            $data['surat_pernyataan'] = $surat_pernyataan_file;
            $request->file('proposal')->storeAs('proposal', $proposal_file);
            $data['proposal'] = $proposal_file;
        }

        if ($request->has('url_proposal')) {
            $nama = str_replace(' ', '-', $request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);

            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date . "-" . $nama . "-surat-pernyataan" . "" . "." . $ext_surat_pernyataan;

            $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file);
            $data['surat_pernyataan'] = $surat_pernyataan_file;
        }
        DB::table('pena_opd')->insert($data);
    }
}
