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
        $middleware->alias([
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
        ]);

        // Run BEFORE the route is matched so the redirect happens even if the
        // from_path also has a real route registered.
        $middleware->prepend(\App\Http\Middleware\HandleRedirects::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
