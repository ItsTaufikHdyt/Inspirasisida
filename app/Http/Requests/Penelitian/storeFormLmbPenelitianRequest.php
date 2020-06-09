<?php

namespace App\Http\Requests\Penelitian;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeFormLmbPenelitianRequest extends FormRequest
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
            'nama_lembaga'       =>'required',
            'nama'               =>'required',
            'email'              =>'required|email:rfc,dns',
            'ktp'                =>'required|mimes:jpeg,jpg|max:512',
            'telp'               =>'required',
            'surat_pernyataan'   =>'required|mimes:jpeg,jpg,png|max:512',
            'alamat'             =>'required',
            'proposal'           =>'required|mimes:pdf|max:5024',
            'url_proposal'       =>'required'
        ];
    }

    public function message()
    {
      return [
          'nama.required'   => 'Nama Tidak Boleh Kosong!',
          'ttl.required'    => 'Tempat Tanggal Lahir Tidak Boleh Kosong!',
          'agama.required'  => 'Agama Tidak Boleh Kosong!',
          

      ];
    }
}
