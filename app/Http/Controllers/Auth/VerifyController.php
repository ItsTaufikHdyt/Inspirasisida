<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Alert;

class VerifyController extends Controller
{
    public function VerifyEmail($token = null)
    {
    	if($token == null) {

    		session()->flash('message', 'Invalid Login attempt');

    		return redirect()->route('login');

    	}

       $user = User::where('email_verification_token',$token)->first();

       if($user == null ){

       	session()->flash('message', 'Invalid Login attempt');

        return redirect()->route('login');

       }

       $user->update([
        
        'email_verified' => 1,
        'email_verified_at' => Carbon::now(),
        'email_verification_token' => ''

       ]);
       
       	session()->flash('message', 'Your account is activated, you can log in now');
        Alert::success('Akun Berhasil Aktif', 'Silahkan Login dengan username dan email yang telah dibuat');
        return redirect()->route('login');

    }

}

