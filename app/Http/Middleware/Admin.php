<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admin
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
        // //return $next($request);
        // if ( Auth::check() && Auth::user()->roles ==1 )
        // {
        //     return $next($request);
        // }

        // return response()->json('Your account is customer');
      //return $next($request);
      if (auth()->user()->roles == 1)
      {
         return $next($request);
      } else if (auth()->user()->roles == 2)
      {
         return redirect('/');
      }
      else if (auth()->user()->roles == null){
        return redirect('/');
      }
    }
}
