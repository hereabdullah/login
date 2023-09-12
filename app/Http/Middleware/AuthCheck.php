<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!session()->has('LoggedUser') && ($request ->path() !='auth/login' && $request->path() != 'auth/register')){
            return redirect('auth/login')->with('fail','you must be logged in ');
        }

        if (session()->has('LoggedUser') && ($request->path() == 'auth/login' || $request->path() == 'auth/register')) {
            return back();
        }
        return $next($request)->header('Cache-Control','no-cache,no-store,max-age=0,must-revalidate')
                                ->header('pragma','no-cache')
                                ->header('Expires', 'Sat 01 Jan 2025 00:00:00 GMT');
    }
}
