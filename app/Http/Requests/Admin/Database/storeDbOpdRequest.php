<?php

namespace App\Http\Requests\Admin\Database;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeDbOpdRequest extends FormRequest
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
        'judul'          => 'required',
        'tahun'          => 'required',	
        'opd'            => 'required',
        'lokasi'         => 'required',	
        'abstraksi'      => 'required',	
        // 'berkas'         => 'required|max:5024',

        ];
    }

    public function message()
    {
      return [
          

      ];
    }
}
