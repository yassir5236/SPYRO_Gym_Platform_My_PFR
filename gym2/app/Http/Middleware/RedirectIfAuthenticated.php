<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(auth()->user()->role== 'admin'){
                    return redirect()->route('admin.getStatistics');

                }
                else if(auth()->user()->role== 'coach'){
                    return redirect()->route('coach.statistics');

                }
                else if(auth()->user()->role== 'user'){
                    return redirect()->route('clients.showProfileForm');

                }
            }
        }

        return $next($request);
    }
}
