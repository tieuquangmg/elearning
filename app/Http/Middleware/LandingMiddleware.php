<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class LandingMiddleware
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
//        if (!isset($_COOKIE['firsttime']) && !Auth::user()) {
//            setcookie("firsttime", "no",time()+3600);
//            return redirect()->route('landing');
//            exit();
//        }
        return $next($request);
    }
}