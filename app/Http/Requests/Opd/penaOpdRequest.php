<?php

namespace App\Http\Requests\Opd;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class penaOpdRequest extends FormRequest
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
            'tgjawab'              =>'required',
            'nip'                =>'required',
            'jabatan'            =>'required',
            'email'              =>'required|email:rfc,dns',
            'telp'               =>'required',
            'surat_pernyataan'   =>'required|mimes:jpeg,jpg,png,pdf|max:5024',
            'alamat'             =>'required',
            'proposal'           =>'mimes:pdf|max:5024',
            'captcha'            => 'required|captcha'
        ];
    }

    public function messages()
    {
      return [
          'nama.required'   => 'Nama Tidak Boleh Kosong!',
          'tgjawab.required'    => 'Nama Penanggung Jawab Tidak Boleh Kosong!',
          'nip.required'  => 'NIP Tidak Boleh Kosong!',
          'jabatan.required' => 'Jabatan Tidak Boleh Kosong',
          'email.required' => 'Email Tidak Boleh Kosong',
          'tlp.required' => 'Nomer Telepon Tidak Boleh Kosong',
          'surat_pernyataan.required' => 'Surat Pernyataan Tidak Boleh Kosong',
          'surat_pernyataan.mimes' => 'Surat Pernyataan Harus Berekstensi JPEG, JPG, PNG, PDF',
          'surat_pernyataan.max' => 'Size File Surat Pernyataan Maksimal 5 Mb',
          'alamat.required' => 'Alamat Tidak Boleh Kosong',
          'proposal.mimes' => 'Proposal Harus Berekstensi PDF',
          'proposa.max' => 'Size File Proposal Maksimal 5 Mb',
          'captcha.required' => 'Captcha Tidak Boleh Kosong',
          'captcha.captcha' => 'Captcha Salah'
      ];
    }
}
