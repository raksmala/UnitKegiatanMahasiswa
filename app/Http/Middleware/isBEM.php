<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isBEM
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
        if(Auth::check() && Auth::User()->status == 'BEM') {    
            return $next($request);
        } else if(Auth::check() && Auth::User()->status == 'UKM') {
            return redirect()->route('admin');
        } else {
            return redirect()->route('user');
        }
    }
}
