<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Vérifie si l'utilisateur est connecté ET si son rôle est 'Admin'
        if ($request->user()?->role !== 'Admin') {
            abort(403, 'Accès réservé aux Administrateurs');
        }
        return $next($request);
    }
}
