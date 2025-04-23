<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $routeMiddleware = [
        'throttle.form' => \App\Http\Middleware\ThrottleFormSubmission::class,
    ];
}
