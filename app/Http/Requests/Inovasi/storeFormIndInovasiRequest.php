<?php

namespace App\Http\Requests\Inovasi;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeFormIndInovasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'               =>'required',
            'ttl'                =>'required',
            'agama'              =>'required',
            'pekerjaan'          =>'required',
            'email'              =>'required|email:rfc,dns',
            'pendidikan'         =>'required',
            'nation'             =>'required',
            'ktp'                =>'required|mimes:jpeg,jpg|max:5024',
            'telp'               =>'required',
            'izin_ortu'          =>'mimes:jpeg,jpg|max:5024',
            'izin_sekolah'       =>'mimes:jpeg,jpg|max:5024',
            'surat_pernyataan'   =>'required|mimes:jpeg,jpg,png|max:5024',
            'alamat'             =>'required',
            'proposal'           =>'mimes:pdf|max:5024',
            // 'url_proposal'       =>'required',
            'captcha'            => 'required|captcha'
        ];
    }

    public function messages()
    {
      return [
          'nama.required'   => 'Nama Tidak Boleh Kosong!',
          'ttl.required'    => 'Tempat Tanggal Lahir Tidak Boleh Kosong!',
          'agama.required'  => 'Agama Tidak Boleh Kosong!',
          'pekerjaan.required' => 'Pekerjaan Tidak Boleh Kosong',
          'email.required' => 'Email Tidak Boleh Kosong',
          'pendidikan.required' => 'Pendidikan Tidak Boleh Kosong',
          'nation.required' => 'Warga Negara Tidak Boleh Kosong',
          'ktp.required' => 'KTP Tidak Boleh Kosong',
          'ktp.mimes' => 'KTP Harus Berekstensi JPEG, JPG',
          'ktp.max' => 'Size File KTP Maksimal 5 Mb ',
          'izin_ortu.mimes' => 'Izin Orang Tua Harus Berekstensi JPEG, JPG',
          'izin_ortu.max' => 'Size File Izin Orang Tua Maksimal 5 Mb ',
          'izin_sekolah.mimes' => 'Izin Sekolah Tua Harus Berekstensi JPEG, JPG',
          'izin_sekolah.max' => 'Size File Izin Sekolah Tua Maksimal 5 Mb',
          'surat_pernyataan.required' => 'Surat Pernyataan Tidak Boleh Kosong',
          'surat_pernyataan.mimes' => 'Surat Pernyataan Harus Berekstensi JPEG, JPG, PNG',
          'surat_pernyataan.max' => 'Size File Surat Pernyataan Maksimal 5 Mb',
          'alamat.required' => 'Alamat Tidak Boleh Kosong',
          'proposal.mimes' => 'Proposal Harus Berekstensi PDF',
          'proposa.max' => 'Size File Proposal Maksimal 5 Mb',
          'captcha.required' => 'Captcha Tidak Boleh Kosong'



      ];
    }
}
