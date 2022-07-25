<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Http\Request;
use Auth;
class Authenticate extends Middleware
{
    public function handle($request, Closure $next)
    {
       if(Auth::check() && Auth::user()->is_admin == 1 && hasPermission($request->path())){
            return $next($request);
       } else {
            if(Auth::check()){
                abort(404);
            } else {
                return redirect(route('login'));
            }
       }
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */

    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
