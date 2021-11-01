<?php

namespace App\Repositories\Admin\User;

use App\Repositories\Admin\Core\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class UserRepository implements UserRepositoryInterface
{

    protected $user;

    public function __contruct(user $user)
    {
        $this->user = $user;
    }

    public function activatedUser($request, $id)
    {
        $data = [];
        if ($request->has('email_verified')) {
            $data['username'] = $request->activated;
            $data['email_verification_token'] = '';
            $data['email_verified_at'] = Carbon::now();
        }
        if ($request->has('password')) {
            $data['password'] = bcrypt($request->password);
        }
        DB::table('users')
            ->where('id', $id)
            ->update($data);
    }
}
