<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    protected $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    public function handle($request, Closure $next, $roles)
    {
        if ($this->auth->guest() || !$request->user()->hasRole(explode('|', $roles))){
            return response()->view('errors.401');
        } else {
            return $next($request);
        }
    }
}
