<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use App\Validation\AuthRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\loginRequest;
Use Alert;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthRequest, AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function username()
    // {
    //     return 'username';
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // ---------------- refreshCaptcha ------------------------
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img('math')]);
    }

    public function ShowLoginForm()
    {
    	return view('auth.pagelogin');
    }

    public function HandleLogin(loginRequest $request)
    {
    	
        $this->loginDataSanitization($request->except(['_token']));

        $credentials = $request->except(['_token','login','captcha']);

        $user = User::where('email',$request->email)->first();

        if($user->email_verified == 1 && $user->level == 1){

        if (auth()->attempt($credentials)) {

                 $user = auth()->user();

                 $user->last_login = Carbon::now();

                 $user->save();

                 return redirect()->route('admin.dashboard');

            }
           
        }else if($user->email_verified == 1 && $user->level == 2){
            if (auth()->attempt($credentials)) {

                $user = auth()->user();

                $user->last_login = Carbon::now();

                $user->save();

                return redirect()->route('sipeena');

           }
        }

        Alert::error('Error Login', 'Data Yang Anda Masukkan Salah, Silahkan Periksa Kembali');

        return redirect()->back();
    }
}
