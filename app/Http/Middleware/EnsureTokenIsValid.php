<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
class EnsureTokenIsValid extends Middleware
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
        //$request->session()->put('key', 'value')
        if (!$request->session()->has('user_token'))
            return redirect('login');
        return $next($request);
    }
}