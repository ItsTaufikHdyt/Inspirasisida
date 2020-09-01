<?php

namespace App\Http\Requests\Admin\Prosedur;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeProsedurRequest extends FormRequest
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
        'judul_prosedur' => 'required',
        'narasi'         => 'required',	
        

        ];
    }

    public function message()
    {
      return [
          

      ];
    }
}
