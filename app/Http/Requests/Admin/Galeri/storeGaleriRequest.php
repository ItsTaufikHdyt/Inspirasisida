<?php

namespace App\Http\Requests\Admin\Galeri;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeGaleriRequest extends FormRequest
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
            'foto'         =>'required',
            'kategori'         =>'required',
        ];
    }

    public function message()
    {
      return [
          

      ];
    }
}
