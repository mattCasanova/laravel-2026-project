<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        // Redirect guests to the login page, this is because we don't have a named route for login,
        // so we can't use the route name here. If we had a named route for login, we could use that instead of hardcoding the URL.
        $middleware->redirectGuestsTo('/login');

        // We could also redirect authenticated users to a specific page, for example, ideas
        // by deactivating the default Laravel behavior of redirecting authenticated users to /home after login, we can set it to /ideas instead.
        $middleware->redirectUsersTo('/ideas');
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
