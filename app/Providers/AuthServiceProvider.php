<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('blog-edit', function($user){
            return $user->role_id == 3 || $user->role_id == 1;
        });
        Gate::define('blog-delete', function($user){
            return $user->role_id == 3|| $user->role_id == 1;
        });
        Gate::define('blog-create', function($user){
            return $user->role_id == 3|| $user->role_id == 1;
        });
    }
}
