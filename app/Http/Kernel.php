<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array<int, class-string>
     */
    protected $middleware = [
        //\App\Http\Middleware\TrustHosts::class,
        //\App\Http\Middleware\TrustProxies::class,
        //\App\Http\Middleware\HandleCors::class,
        //\Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance::class,
        //\Illuminate\Http\Middleware\TrustHosts::class,
        //\Illuminate\Http\Middleware\HandleCors::class,
        //\Illuminate\Http\Middleware\PreventRequestsDuringMaintenance::class,
        //\Illuminate\Http\Middleware\ValidatePostSize::class,
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string>>
     */
    protected $middlewareGroups = [
        'web' => [
            \Illuminate\Cookie\Middleware\EncryptCookies::class,
            \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
            \Illuminate\Session\Middleware\StartSession::class,
            \Illuminate\View\Middleware\ShareErrorsFromSession::class,
            \Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class,
            //\Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    /**
     * The application's route middleware.
     *
     * @var array<string, class-string>
     */
    protected $routeMiddleware = [
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
}

