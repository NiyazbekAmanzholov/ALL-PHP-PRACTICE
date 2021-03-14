<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\Auth;

class AdminMiddleware
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

    if(Auth::user()->role != '1'){
            dd(404);
    }

        return $next($request);
    }
}
