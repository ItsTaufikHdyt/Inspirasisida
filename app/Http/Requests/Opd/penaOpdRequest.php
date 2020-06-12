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
            'captcha'            => 'required|captcha',
            'email'              =>'required|email:rfc,dns',
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
          

      ];
    }
}
