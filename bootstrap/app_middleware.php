<?php

use App\Http\Middleware\CheckRole;

return Application::configure(basePath: dirname(__DIR__))
    ->withMiddleware(function ($middleware) {
        $middleware->alias([
            'role' => CheckRole::class,
        ]);
    })
    ->create();
