<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
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
        if ( $user = Auth::user() ) {
            if ( $user->age > 18 )
            {
                // If an adult, continue.
                return $next($request);
            }
        }
        // Redirect home.
        return redirect( 'home' );
    }
}
