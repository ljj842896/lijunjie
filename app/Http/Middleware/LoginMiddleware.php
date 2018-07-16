<?php

namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
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
        // dd(isset(session('data') -> login));
        if (isset(session('data') -> login)) {
            
            return $next($request);
        }else{
            return redirect('Admin/login');
        }
    }
}
