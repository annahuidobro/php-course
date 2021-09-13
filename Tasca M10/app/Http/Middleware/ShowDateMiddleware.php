<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ShowDateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Return date
        echo 'Today is: ' . date('Y-m-d') . '<br>';
        return $next($request);
    }
}
