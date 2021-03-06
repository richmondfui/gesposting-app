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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('manage-region', function($user) {
            return $user->hasAnyRoles(['Regional HR']);
        });

        Gate::define('manage-district', function($user) {
            return $user->hasRole('District HR');
        });

        // Gate::define('manage-region', function($user) {
        //     return $user->hasAnyPermissions(
        //         config("postings_config.user_permissions.region")
        //     );
        // });

        // Gate::define('manage-district', function($user) {
        //     return $user->hasAnyPermissions(
        //         config("postings_config.user_permissions.district")
        //     );
        // });
    }
}
