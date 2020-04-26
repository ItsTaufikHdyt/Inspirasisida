<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;
use App\Validation\RegisterRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

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

    use RegisterRequest, AuthenticatesUsers;

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

    public function ShowLoginForm()
    {
    	return view('auth.pagelogin');
    }

    public function HandleLogin(Request $request)
    {
    	
    	$this->loginDataSanitization($request->except(['_token']));

        $credentials = $request->except(['_token','login']);

        $user = User::where('email',$request->email)->first();

        if($user->email_verified == 1 && $user->level == 1){

        if (auth()->attempt($credentials)) {

                 $user = auth()->user();

                 $user->last_login = Carbon::now();

                 $user->save();

                 return redirect()->route('adminDashboard');

            }
           
        }else if($user->email_verified == 1 && $user->level == 2){
            if (auth()->attempt($credentials)) {

                $user = auth()->user();

                $user->last_login = Carbon::now();

                $user->save();

                return redirect()->route('sipeena');

           }
        }

        session()->flash('message', 'Data Yang Anda Masukkan Salah, Silahkan Periksa Kembali');

        session()->flash('type', 'danger');

        return redirect()->back();
    }
}
