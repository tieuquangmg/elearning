<?php

namespace App\Http\Middleware;

use Carbon\Carbon;
use Closure;
use Illuminate\Support\Facades\Auth;
use Cache;
use Illuminate\Support\Facades\Session;

class LogLastUserActivity
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()){
            $expiresAt = Carbon::now()->addMinutes(2);
            Cache::put('online-'.Auth::user()->id,true,$expiresAt);
        }
        return $next($request);
    }
}