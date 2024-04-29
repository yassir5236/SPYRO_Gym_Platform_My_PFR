<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         if (!$request->user()) {
            return redirect('/login');
        }

        if (!$request->user()->isAdmin()) {
            return abort(403, 'Vous n\'êtes pas autorisé à accéder à cette ressource.');
        }
        return $next($request);
    }
}
