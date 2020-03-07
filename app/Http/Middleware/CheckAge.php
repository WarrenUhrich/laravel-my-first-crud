<?php

namespace App\Http\Middleware;

use Closure;

use App\User;
use Auth;

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
        // Get the user.
        if ( $user = Auth::user() )
        {
            // Check their age.
            if ( $user->age >= 18 )
            {
                // If user is old enough, continue!
                return $next($request);
            }
        }
        // Default is redirect to home (user is not old enough.)
        return redirect( 'home' );
    }
}
