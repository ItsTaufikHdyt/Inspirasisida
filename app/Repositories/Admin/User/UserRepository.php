<?php

namespace App\Repositories\Admin\User;

use App\Repositories\Admin\Core\User\UserRepositoryinterface;
use Illuminate\Http\Request;
use App\User;
Use Carbon\Carbon;


class UserRepository implements UserRepositoryinterface
{

protected $user;

    public function __contruct(user $user)
    {
        $this->user = $user;
    }

    public function activatedUser(request $request, $id)
    {
        $user = user::find(id);
        $user->email_verified = 1;
        $user->email_verification_token = '';
        $user->email_verified_at = Carbon::now();
        $user->save();
    }

    public function inActivatedUser(request $request, $id)
    {
        $user = user::find(id);
        $user->email_verified = 0;
        $user->email_verification_token = Str::random(32);
        $user->save();
    }
}