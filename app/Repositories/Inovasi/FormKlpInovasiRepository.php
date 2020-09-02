<?php 

namespace App\Repositories\Inovasi;

// use Illuminate\Database\Eloquent\Model;
use App\Repositories\Core\Inovasi\FormKlpInovasiRepositoryInterface;
use Illuminate\Http\Request;
use App\User;
use App\pendaftaran;
use Auth;
use Storage;
use Carbon\Carbon;

class FormKlpInovasiRepository implements FormKlpInovasiRepositoryInterface
{

    protected $pendaftaran;

    public function __contruct(pendaftaran $pendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
    }

    public function storeKlpInovasiForm($request)
    {
            $nama = str_replace(' ','-',$request->nama);
            $today = Carbon::today()->toDateString();
            $date = str_replace('-','',$today);
            //ktp
            $ext_ktp = $request->file('ktp')->getClientOriginalExtension();
            $ktp_file = $date."-".$nama."-ktp"."".".". $ext_ktp;
            //Izin Orang Tua
            $ext_izin_ortu = $request->file('izin_ortu')->getClientOriginalExtension();
            $izin_ortu_file = $date."-".$nama."-izin-ortu"."".".". $ext_izin_ortu;
            //Izin Sekolah
            $ext_izin_sekolah = $request->file('izin_sekolah')->getClientOriginalExtension();
            $izin_sekolah_file = $date."-".$nama."-izin-sekolah"."".".". $ext_izin_sekolah;
            //Surat Pernyataan
            $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
            $surat_pernyataan_file = $date."-".$nama."-surat-pernyataan"."".".". $ext_surat_pernyataan;
            //proposal
            $ext_proposal = $request->file('proposal')->getClientOriginalExtension();
            $proposal_file = $date."-".$nama."-proposal"."".".". $ext_proposal;


           $pendaftaran = pendaftaran::create([
            'nama'               =>$request->nama,
            'ttl'                =>$request->ttl,
            'agama'              =>$request->agama,
            'pekerjaan'          =>$request->pekerjaan,
            'email'              =>$request->email,
            'pendidikan'         =>$request->pendidikan,
            'nation'             =>$request->nation,
            'ktp'                =>$request->file('ktp')->storeAs('ktp', $ktp_file),
            'telp'               =>$request->telp,
            'izin_ortu'          =>$request->file('izin_ortu')->storeAs('izin-ortu', $izin_ortu_file),
            'izin_sekolah'       =>$request->file('izin_sekolah')->storeAs('izin-sekolah', $izin_sekolah_file),
            'surat_pernyataan'   =>$request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file),
            'alamat'             =>$request->alamat,
            'proposal'           =>$request->file('proposal')->storeAs('proposal', $proposal_file),
            'url_proposal'       =>$request->url_proposal,
            'verifikasi'         => 0,
            'kelompok'           => 1,
            'kategori_peena'      =>'inovasi'
            ]);
    }

}