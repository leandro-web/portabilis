<?php

namespace App\Http\Middleware;

use Closure;

class AdminAccess
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
        if(auth()->check() AND auth()->user()->admin AND auth()->user()->active){
            return $next($request);
        }
        
        dd('Acesso negado, você não é um administrador');
        
    }
}
