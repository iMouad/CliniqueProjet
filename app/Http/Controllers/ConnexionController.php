<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ConnexionController extends Controller
{
    
    public function formulaire() {

          // Si l'user est déjà connecté redirege vers tableau de bors
        if (!auth()->guest()) {

          return redirect('/dashboard');
          // Stop everything
          die();
        }
        return view('login');
    }

    //Pour la validation du formulaire de Connexion
    public function traitement() {

      // Valider les champs
      request()->validate([
        'username' => ['required'],
        'password' => ['required','min:8'],
      ]);

      //S'authentifier
      $resultat = auth()->attempt([
        'username' => request('username'),
        'password' => request('password'),
      ]);

      if($resultat) {
        return redirect('/dashboard');
      }

      return back()->withErrors([
        'username' => 'Vos identifants sont incorrects',
        ])->withInput();
    }
}
