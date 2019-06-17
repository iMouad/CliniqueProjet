<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\User;
use App\admin;

class CompteController extends Controller
{

    public function acceuil() {
      // Vérifier la connexion dans le middleware

       //Statistiques de la base de donnéelse
      $patientsnumber = patient::all()->count();
      $lastpatient = patient::latest()->first();


      return view('dashboard',[
        'patientsnumber' => $patientsnumber,
        'lastpatient' => $lastpatient,
      ]);
    }

     public function profile() {

       //Vérification Connexion dans le middleware Auth

       $user = auth()->user();

       return view('profile',[
         'user' => $user,
       ]);

     }

     public function editprofile() {
       // Validation du formulaire
       $data = request()->validate([
            'username' => ['required','unique:admins,username'],
            'name' => ['required','string'],
            'email' => ['required','email'],
            'password' => ['required','confirmed','min:8'],
            'password_confirmation' => ['required'],
        ]);

      // Modification en base de données
      $update = auth()->user()->update([
            'username' => request('username'),
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password')),

        ]);

        if($update) {
          flash('Vos informations sont bien modifiés')->success();
          return back();
        }
     }

     // la vue pour ajouter un administrateur
     public function new_admin() {
       return view("add-admin");
     }

     //Ajouter un nouveau admin à la base de donnée
     public function add_admin() {
       $newadmin = request()->validate([
         'username' => ['required','unique:admins,username'],
         'name' => ['required','string'],
         'email' => ['required','email'],
         'password' => ['required','confirmed'],
         'password_confirmation' => ['required']
       ]);

       $insertadmin = admin::create([
         'username' => request('username'),
         'name' => request('name'),
         'email' => request('email'),
         'password' => bcrypt(request('password')),
       ]);

       if ($insertadmin) {
          flash('Administrateur ajouté avec succès.')->success();
          return back();
       }

       dump($newadmin);
     }

     // Déconnexion
    public function deconnexion () {
      auth()->logout();
      return redirect('/');
    }



}
