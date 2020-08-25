<?php

namespace App\Repositories\Admin\Core\User;

use Illuminate\Http\Request;

interface UserRepositoryInterface {

    public function activatedUser($request, $id);
    public function inActivatedUser($request, $id)
   
    
}