<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EnsureTokenIsValid
{
    /**
     * untuk membuat middleware,
     * php artisan make:middleware EnsureTokenIsValid
     */
    public function handle(Request $request, Closure $next)
    {
        $request->json('test');
        return $next($request);
    }
}
