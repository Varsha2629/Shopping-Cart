<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {      
            if (Auth::guard($guard)->guest()) {
                if($request -> ajax() || $request -> wantsJson()) {
                    return response('Unauthorised.', 401);
                } 
                else {
                    return $next($request);
                
            }
    
        return $next($request);
    }
}
