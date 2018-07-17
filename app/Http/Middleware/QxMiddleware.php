<?php

namespace App\Http\Middleware;

use Closure;

class QxMiddleware
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
        // dd(session('data') -> qx == 1);
        if (isset(session('data') -> login)) {
            # code...
            if (session('data') -> qx == 1) {

                return $next($request);
            }else{
                return back() -> with('error','没有权限！');
            }
        }else{
            
                return redirect('/Admin/login');
        }
    }
}
