<?php

namespace App\Repositories\Opd;

use App\Repositories\Core\Opd\PenaOpdRepositoryInterface;
use Illuminate\Http\Request;
use App\penaopd;
use Auth;
use Storage;
use Carbon\Carbon;

class PenaOpdRepository implements PenaOpdRepositoryInterface
{
    protected $penaopd;

    public function __contruct(penaopd $penaopd)
    {
        $this->penaopd = $penaopd;
    }

    public function storePenaOpd($request)
    {

        if($request->has('proposal')){
            $nama = str_replace(' ', '-', $request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);

            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date."-".$nama."-surat-pernyataan"."".".". $ext_surat_pernyataan;
            //proposal
            $ext_proposal = $request->file('proposal')->getClientOriginalExtension();
            $proposal_file = $date."-".$nama."-proposal"."".".". $ext_proposal;

            $penaopd = penaopd::create([
            'nama'                  => $request->nama,
            'tgjawab'               => $request->tgjawab,
            'nip'                   => $request->nip,
            'jabatan'               => $request->jabatan,
            'surat_pernyataan'      => $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file),
            'email'                 => $request->email,
            'telp'                  => $request->telp,
            'alamat'                => $request->alamat,
            'proposal'              => $request->file('proposal')->storeAs('proposal', $proposal_file),
            'url_proposal'          => null,
            'verifikasi'            => 0,
            ]);
        }

        if($request->has('url_proposal')){
            $nama = str_replace(' ', '-', $request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-', '', $today);

            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date."-".$nama."-surat-pernyataan"."".".". $ext_surat_pernyataan;

            $penaopd = penaopd::create([
            'nama'                  => $request->nama,
            'tgjawab'               => $request->tgjawab,
            'nip'                   => $request->nip,
            'jabatan'               => $request->jabatan,
            'surat_pernyataan'      => $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file),
            'email'                 => $request->email,
            'telp'                  => $request->telp,
            'alamat'                => $request->alamat,
            'proposal'              => null,
            'url_proposal'          => $request->url_proposal,
            'verifikasi'            => 0,
            ]);
        }

    }
}
