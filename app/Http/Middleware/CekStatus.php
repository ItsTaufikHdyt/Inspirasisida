<?php

namespace App\Http\Middleware;

use Closure;
use App\user;
use Auth;

class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        if ($user->level == 1) {
            return $next($request);
        } elseif ($user->level == 2) {
            return redirect()->route('sipeena');
        }
        abort(403, 'Unauthorized action.');
        
    }
}
