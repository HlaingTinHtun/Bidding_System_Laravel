<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class DealerAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'dealer')
    {
        if (!Auth::guard($guard)->check()) {
            return redirect('dealer/login');
        }

        return $next($request);
    }
}
