<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check())
        {
            if(Auth::user()->role_akun == 'admin')
            {
                return $next($request);
            }
            else
            {
                return redirect('/')->with('status','Access Ditolak! kamu bukanlah Admin');
            }
        }
        else
        {
            return redirect('/')->with('status','Login Login Terlebih Dahulu');
        }
    }
}
