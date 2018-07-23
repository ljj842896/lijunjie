<?php

namespace App\Http\Middleware;
use App\Models\Config;
use Closure;

class SysMiddleware
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
            $sys = Config::find(1);
        if ($sys['sys_close'] == 'y') {
            
            return $next($request);
        }else{
            return redirect('/sys/close');
        }
    }
}
