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
            'foto'             =>'required|mimes:jpeg,jpg,png|max:512',
            'kategori'         =>'required',
        ];
    }

    public function messages()
    {
        return [
            'foto.required' => 'Foto Tidak Boleh Kosong!',
            'foto.mimes' => 'Foto Harus Berekstensi JPEG, JPG, PNG!',
            
        ];
    }
}
