<?php

namespace App\Http\Requests\Admin\Opd;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class storeDataOpdRequest extends FormRequest
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
            'nama_uk'         =>'required',

        ];
    }

    public function message()
    {
      return [
          

      ];
    }
}
