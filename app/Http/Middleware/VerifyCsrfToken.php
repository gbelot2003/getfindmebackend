<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{


    public function handle($request, Closure $next)
    {
        // Don't validate CSRF when testing.
        if (env('APP_ENV') === 'testing') {
            return $this->addCookieToResponse($request, $next($request));
        }

        return parent::handle($request, $next);
    }

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [

    ];
}
