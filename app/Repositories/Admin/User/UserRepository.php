<?php

namespace App\Repositories\Admin\User;

use App\Repositories\Admin\Core\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\User;
Use Carbon\Carbon;


class UserRepository implements UserRepositoryInterface
{

protected $user;

    public function __contruct(user $user)
    {
        $this->user = $user;
    }

    public function activatedUser($request, $id)
    {
        $user = user::find($id);
        $user->email_verified = $request->activated;
        $user->email_verification_token = '';
        $user->email_verified_at = Carbon::now();
        $user->save();
    }
}