<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Closure;

class isAdmin
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
        $user = $request->user();
        if($user && $user->admin == 1){
            return $next($request);
        }
        return redirect('/home');
    }
}
