<?php

namespace App\Http\Requests\Admin\Database;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeDbMasyarakatRequest extends FormRequest
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
        'judul'      => 'required',
        'nama'      => 'required',	
        'lokasi'     => 'required',	
        'abstraksi'  => 'required',	

        ];
    }

    public function message()
    {
      return [
          

      ];
    }
}
