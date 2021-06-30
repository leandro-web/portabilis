<?php

namespace App\Http\Middleware;

use Closure;

class ClientAccess
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
        if(auth()->check() AND auth()->user()->active){
            return $next($request);
        }
        
        dd('Acesso negado, você não está ativo');
    }
}
