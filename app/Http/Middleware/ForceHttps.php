<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

class ForceHttps
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
        if(array_key_exists('HTTP_X_FORWARDED_PROTO', $_SERVER)){
            Log::debug('handle1111');
            if (App::environment(['production']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] != 'https') {
                Log::debug('handle2222');
                return redirect()->secure($request->getRequestUri());
            }
        }
        Log::debug('handle3333');
        return $next($request);
    }
}
