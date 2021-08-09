<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ageCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed 
     */

    /*
     public function handle(Request $request, Closure $next) // for global middleware
    {
        if ($request->age && $request->age < 18) {
            return redirect("noaccess");
        }
        return $next($request);
    }
    
    public function handle($request, Closure $next) // for grouped middleware
    {
        if ($request->age && $request->age < 18) {
            return redirect("noaccess");
        }

        return $next($request);
    }
    */

    public function handle($request, Closure $next) // for route middlware
    {
        if ($request->age && $request->age < 18) {
            return redirect('noaccess');
        }
        return $next($request);
    }
}
