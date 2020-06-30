<?php
namespace App\Validation;

use Illuminate\Support\Facades\Validator;

Trait AuthRequest 
{
    public function inputDataSanitization($data)
    {
        $validator = Validator::make($data, [
           'name' => 'required',
           'email' => 'required',
           'password' => 'required|min:6|confirmed',
           'captcha' => 'required|captcha'
        ]);
        
        if($validator->fails()){

         return redirect()->back()->withErrors($validator)->withInput();

        }

        return $validator;
    }
     
     public function loginDataSanitization($data)
    {
        $validator = Validator::make($data, [    
           'email' => 'required',
           'captcha' => 'required|captcha',
           'password' => 'required|min:6|confirmed',   
        ]);
        
        if($validator->fails()){

         return redirect()->back()->withErrors($validator)->withInput();

        }

        return $validator;
    }
}