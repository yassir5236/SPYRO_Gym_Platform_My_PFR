<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CoachMiddleware
{
   
    public function handle(Request $request, Closure $next): Response
    {

         // Vérifie si l'utilisateur est authentifié et est un coach
         if (!auth()->check() || !$request->user()->isCoach()) {
            abort(403, 'Vous n\'êtes pas autorisé à accéder à cette ressource.');
        }

        return $next($request);
    }
}
