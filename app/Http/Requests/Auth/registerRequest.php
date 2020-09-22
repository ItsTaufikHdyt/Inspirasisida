<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\User;

class registerRequest extends FormRequest
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
           'nama' => 'required',
           'email' => 'required|unique:users,email',
           'password' => 'required|min:6',
           'captcha' => 'required|captcha'
        ];
    }

    public function messages()
    {
      return [
          'nama.required'   => 'Nama Tidak Boleh Kosong!',
          'email.required' => 'Email Tidak Boleh Kosong',
          'email.unique' => 'Email Sudah Teregistrasi, Silahkan Gunakan Email Lain',
          'password.required' => 'Password Tidak Boleh Kosong',
          'captcha.required' => 'Captcha Tidak Boleh Kosong',
          'captcha.captcha' => 'Captcha Salah'
      ];
    }
}
