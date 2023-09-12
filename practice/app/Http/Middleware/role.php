<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        echo 'Im middelware';

        //return redirect()->route('admin');
        return $next($request);
    }



    // public function handle(Request $request, Closure $next,$role)
    // {
    //     if ($role == 'admin'){
    //     return redirect()->route('admin');
    //     }
    //     if ($role == 'user'){
    //         return redirect()->route('user');
    //     }
        
    //     return $next($request);
    // }


    // public function handle(Request $request, Closure $next)
    // {
    //     if ($request->route('role') == 'admin'){
    //     return redirect()->route('admin');
    //     }
    //     if ($request->route('role') == 'user'){
    //         return redirect()->route('user');
    //     }
        
    //     return $next($request);
    // }
}
