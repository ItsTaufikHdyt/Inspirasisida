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
            'ktp'                =>'required|mimes:jpeg,jpg|max:512',
            'telp'               =>'required',
            'izin_ortu'          =>'required|mimes:jpeg,jpg|max:512',
            'izin_sekolah'       =>'required|mimes:jpeg,jpg|max:512',
            'surat_pernyataan'   =>'required|mimes:jpeg,jpg,png|max:512',
            'alamat'             =>'required',
            'proposal'           =>'required|mimes:pdf|max:5024',
            'url_proposal'       =>'required',
            'captcha'            => 'required|captcha'
        ];
    }

    public function message()
    {
      return [
          'nama.required'   => 'Nama Tidak Boleh Kosong!',
          'ttl.required'    => 'Tempat Tanggal Lahir Tidak Boleh Kosong!',
          'agama.required'  => 'Agama Tidak Boleh Kosong!',
          'ktp'

      ];
    }
}
