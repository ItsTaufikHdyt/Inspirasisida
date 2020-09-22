<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'email' => 'required',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ];
    }

    public function messages()
    {
      return [
          'email.required' => 'Email Tidak Boleh Kosong',
          'password.required' => 'Password Tidak Boleh Kosong',
          'captcha.required' => 'Captcha Tidak Boleh Kosong',
          'captcha.captcha' => 'Captcha Salah'
      ];
    }
}
