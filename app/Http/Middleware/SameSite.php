<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Response;

class SameSite
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         header("Set-Cookie: HttpOnly;Secure;SameSite=Strict");
//        response()::header("Set-Cookie", "HttpOnly;Secure;SameSite=Strict");
        return $next($request);
    }
}
