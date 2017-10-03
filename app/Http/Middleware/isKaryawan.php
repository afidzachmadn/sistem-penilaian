<?php

namespace App\Http\Middleware;

use Closure;

class isKaryawan
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
         if($request->session()->get('role') == 'karyawan') {
             return $next($request);
         } else {
             return redirect()->action('AuthController@login');
         }
     }
}
