<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Configuration\Providers;
use Illuminate\Foundation\Configuration\Routes\Web;
use Illuminate\Foundation\Configuration\Routes\Console;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->register();
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
