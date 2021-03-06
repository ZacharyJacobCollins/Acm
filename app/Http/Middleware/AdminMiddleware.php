<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return  mixed
     */
    public function handle($request, Closure $next)
    {
        //If user is not an admin redirect to home.
        if ($request->user()->type != 'A')
        {
            return redirect('/denied');
        }

        return $next($request);
    }
}
