<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(! auth()->check()) {
            return route('login');
          }
          if( auth()->user()->role_id == 2) {
            auth()->logout();
            // return redirect(route('login'))->withErrors(['username' =>  'You do not have access to this application.']);
            return redirect(route('welcome'))->with('danger', 'You do not have prevelages to access account');
          }
        return $next($request);
    }
}
