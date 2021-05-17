<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request 
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::user()){
            return redirect()->route('login');
        } else {
            if(Auth::user()->user_type !== 1){
                session()->flush();
                return redirect()->route('login');
            }
        }
        return $next($request);
    }
}
