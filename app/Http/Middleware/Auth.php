<?php

namespace App\Http\Middleware;

use Closure;

class Auth
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
      // Vérifier la connexion
   if (auth()->guest()) {
     // Message d'erreur
     return redirect('')->withErrors([
       'username' => 'Vous devez être connecté pour voir cette page'
     ]);
     // Stop everything
     die();
   }
        return $next($request);
    }
}
