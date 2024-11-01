<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsProtocol
{
    public function handle($request, Closure $next)
    {
        if (App::environment('production')) {
            // Untuk AJAX requests
            if ($request->ajax()) {
                return $next($request);
            }

            // Redirect ke HTTPS
            if (!$request->secure()) {
                return redirect()->secure($request->getRequestUri());
            }
        }

        return $next($request);
    }
}