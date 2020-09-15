<?php

namespace App\Http\Requests\Inovasi;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeFormLmbInovasiRequest extends FormRequest
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
            'ktp'                =>'required|mimes:jpeg,jpg|max:5024',
            'telp'               =>'required',
            'surat_pernyataan'   =>'required|mimes:jpeg,jpg,png|max:55024',
            'alamat'             =>'required',
            'proposal'           =>'required|mimes:pdf|max:5024',
            'url_proposal'       =>'required',
            'captcha'            => 'required|captcha'
        ];
    }

    public function messages()
    {
      return [
          'nama.required'   => 'Nama Tidak Boleh Kosong!',
          'nama_lembaga.required'   => 'Nama Lembaga Tidak Boleh Kosong!',
          'email.required' => 'Email Tidak Boleh Kosong',
          'ktp.required' => 'KTP Tidak Boleh Kosong',
          'ktp.mimes' => 'KTP Harus Berekstensi JPEG, JPG',
          'ktp.max' => 'Size File KTP Maksimal 5 Mb ',
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
