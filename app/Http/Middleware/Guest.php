<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
        if($guard == 'users'){
            if (!Auth::check()) {
                return \Redirect::guest('login');
            }
        }else if($guard == 'admin'){
            if (!Auth::guard('admin')->check()) {
                return \Redirect::guest('admin/login');
            }
        }
        return $next($request);
    }
}
