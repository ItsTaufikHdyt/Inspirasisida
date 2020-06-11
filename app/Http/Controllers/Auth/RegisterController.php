<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Mail\VerificationEmail;
use App\User;
use App\Validation\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  

    use RegisterRequest;

  
    protected $redirectTo = RouteServiceProvider::HOME;

  
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function ShowRegisterForm()
    {
    	return view('auth.pageregister');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            
        ]);
    }


    public function HandleRegister(Request $request)
    {
        $this->inputDataSanitization($request->all());

        $user = User::create([
            'nama' => trim($request->input('nama')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
            'level' => 2,
            'email_verification_token' => Str::random(32)
        ]);
            
        \Mail::to($user->email)->send(new VerificationEmail($user));

        session()->flash('message', 'Please check your email to activate your account');
       
        return redirect()->back();

    }
}