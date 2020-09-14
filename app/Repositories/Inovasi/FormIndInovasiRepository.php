<?php 

namespace App\Repositories\Inovasi;

// use Illuminate\Database\Eloquent\Model;
use App\Repositories\Core\Inovasi\FormIndInovasiRepositoryInterface;
use Illuminate\Http\Request;
use App\User;
use App\pendaftaran;
use Auth;
use Storage;
use Carbon\Carbon;
Use DB;

class FormIndInovasiRepository implements FormIndInovasiRepositoryInterface
{

    protected $pendaftaran;

    public function __contruct(pendaftaran $pendaftaran)
    {
        $this->pendaftaran = $pendaftaran;
    }

    public function storeIndInovasiForm($request)
    {
        $data = [   
            'nama'               =>$request->nama,
            'ttl'                =>$request->ttl,
            'agama'              =>$request->agama,
            'pekerjaan'          =>$request->pekerjaan,
            'email'              =>$request->email,
            'pendidikan'         =>$request->pendidikan,
            'nation'             =>$request->nation,
            'telp'               =>$request->telp,
            'alamat'             =>$request->alamat,
            'verifikasi'         => 0,
            'kelompok'           => 0,
            'kategori_peena'      =>0,
            'created_at' =>  Carbon::now(), # new \Datetime()
            'updated_at' => Carbon::now(),
            
        ];
       
        if($request->has('proposal')){
            if($request->hasfile("izin_ortu") && $request->hasfile("izin_sekolah"))
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
            
            $data['ktp'] = $request->file('ktp')->storeAs('ktp', $ktp_file);
            $data['surat_pernyataan'] = $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file);
            $data['proposal'] = $request->file('proposal')->storeAs('proposal', $proposal_file);
            $data['izin_ortu'] = $request->file('izin_ortu')->storeAs('izin-ortu', $izin_ortu_file);
            $data['izin_sekolah'] = $request->file('izin_sekolah')->storeAs('izin-sekolah', $izin_sekolah_file);
            }
        }
        if($request->has('url_proposal')){
            if($request->hasfile("izin_ortu") && $request->hasfile("izin_sekolah"))
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

            $data['ktp'] = $request->file('ktp')->storeAs('ktp', $ktp_file);
            $data['surat_pernyataan'] = $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file);
            $data['izin_ortu'] = $request->file('izin_ortu')->storeAs('izin-ortu', $izin_ortu_file);
            $data['izin_sekolah'] = $request->file('izin_sekolah')->storeAs('izin-sekolah', $izin_sekolah_file);
            $data['url_proposal'] = $request->url_proposal;
          }
        }
        if(empty($request->input('izin_ortu')) && empty($request->input('izin_sekolah'))){
            if($request->has('proposal'))
            {
                $nama = str_replace(' ','-',$request->nama);
                $today = Carbon::today()->toDateString();
                $date = str_replace('-','',$today);
                //ktp
                $ext_ktp = $request->file('ktp')->getClientOriginalExtension();
                $ktp_file = $date."-".$nama."-ktp"."".".". $ext_ktp;
                //Surat Pernyataan
                $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
                $surat_pernyataan_file = $date."-".$nama."-surat-pernyataan"."".".". $ext_surat_pernyataan;
                //proposal
                $ext_proposal = $request->file('proposal')->getClientOriginalExtension();
                $proposal_file = $date."-".$nama."-proposal"."".".". $ext_proposal;

                $data['ktp'] = $request->file('ktp')->storeAs('ktp', $ktp_file);
                $data['surat_pernyataan'] = $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file);
                $data['proposal'] = $request->file('proposal')->storeAs('proposal', $proposal_file);
            }
        
        }
        if(empty($request->input('izin_ortu')) && empty($request->input('izin_sekolah'))){
            if($request->has('url_proposal'))
            {
                $nama = str_replace(' ','-',$request->nama);
                $today = Carbon::today()->toDateString();
                $date = str_replace('-','',$today);
                //ktp
                $ext_ktp = $request->file('ktp')->getClientOriginalExtension();
                $ktp_file = $date."-".$nama."-ktp"."".".". $ext_ktp;
                //Surat Pernyataan
                $ext_surat_pernyataan = $request->file('surat_pernyataan')->getClientOriginalExtension();
                $surat_pernyataan_file = $date."-".$nama."-surat-pernyataan"."".".". $ext_surat_pernyataan;

                $data['url_proposal'] = $request->url_proposal;
                $data['ktp'] = $request->file('ktp')->storeAs('ktp', $ktp_file);
                $data['surat_pernyataan'] = $request->file('surat_pernyataan')->storeAs('surat-pernyataan', $surat_pernyataan_file);

            }
        }
            DB::table('pendaftaran')->insert($data);
        

    }

 }

    
