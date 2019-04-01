<?php

namespace App\Http\Middleware;
use auth;

use Closure;

class publisher
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
      if (Auth::user() && ( Auth::user()->rank == 'publisher' || Auth::user()->rank=='admin' ) ) {
        return $next($request);
      }
      else {
        return redirect('Forbidden');
      }
    }
}
