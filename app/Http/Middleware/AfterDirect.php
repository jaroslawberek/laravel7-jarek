<?php

namespace App\Http\Middleware;

use Closure;

class AfterDirect
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
        view()->share('my_variable', ['menu1', 'menu2']); //todo: dddd
        return $next($request);
    }
}
