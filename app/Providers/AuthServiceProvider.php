<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
Use Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $user = Auth::user();
        $this->registerPolicies();

        Gate::define('isAdmin', function($user) {
            return $user->level == 1;
         });

         Gate::define('isUser', function($user) {
            return $user->level == 2;
        });
    }
}
