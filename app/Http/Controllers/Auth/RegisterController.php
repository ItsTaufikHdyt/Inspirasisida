<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationEmail;
use App\User;
use App\Validation\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\registerRequest;
use Alert;


class RegisterController extends Controller
{
  

    use AuthRequest;

  
    protected $redirectTo = RouteServiceProvider::HOME;

  
    public function __construct()
    {
        $this->middleware('guest');
    }

    // ---------------- refreshCaptcha ------------------------
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('math')]);
    }

    public function ShowRegisterForm()
    {
    	return view('auth.pageregister');
    }

    

    public function HandleRegister(registerRequest $request)
    {
        
        $this->inputDataSanitization($request->all());

        try {
        $user = User::create([
            'nama' => trim($request->input('nama')),
            'email' => strtolower($request->input('email')),
            'password' => Hash::make($request->input('password')),
            'level' => 2,
            'email_verification_token' => Str::random(32)
        ]);
        }catch (ModelNotFoundException $exception) {
            return back()->withError($exception->getMessage())->withInput();
        }


        try{
            
        Mail::to($user->email)->send(new VerificationEmail($user));

        Alert::success('Registrasi Berhasil', 'Silahkan Periksa Email Anda');

        return redirect()->back();

        }catch(Exception $e){
            dd($e);
        }
       


    }
}
