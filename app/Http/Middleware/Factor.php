<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Factor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       $user =auth()->user();
        if(auth()->check() && $user ->code){
            if(!$request->is('vryfiy*')){
  return redirect()->route('vryfiy.index');
            }
        }
        return $next($request);
    }
}
