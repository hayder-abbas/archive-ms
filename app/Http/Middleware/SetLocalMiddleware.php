<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user() && $request->user()->locale) {
            app()->setLocale($request->user()->locale);
        } else {
            app()->setLocale($request->getPreferredLanguage());
        }

        return $next($request);
    }
}
