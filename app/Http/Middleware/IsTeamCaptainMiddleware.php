<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsTeamCaptainMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check() || !auth()->user()->is_teamCaptain){
           redirect()->route('signinpage');
        }
        return $next($request);
    }
}
