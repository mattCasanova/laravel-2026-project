<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        /*
        This was just an example of how to use gates.  We can also use policies

        // optional if we wanted a guest user to be able to view the admin page we use ?User instead of User and return true if $user is null
        // Gate::define('view-admin', function (?User $user)
        Gate::define('view-admin', function (User $user) {
            return $user->id === 1 ? Response::allow() : Response::denyAsNotFound();
        });
            */
    }
}
