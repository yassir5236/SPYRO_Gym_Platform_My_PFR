<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
   
    public function handle(Request $request, Closure $next): Response
    {

         if (!auth()->check() || !$request->user()->isClient()) {
            abort(403, 'Vous n\'êtes pas autorisé à accéder à cette ressource.');
        }

        return $next($request);
    }
}
