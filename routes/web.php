<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route pour contrôleur de formulaire de connexion, @formulaire vérifie si je suis déjà connecté
Route::get('/' ,'ConnexionController@formulaire');
// Route pour contrôleur de formulaire de connexion, @traitement vérifie et valide le formulaire
Route::post('/' ,'ConnexionController@traitement');




Route::group([
     'middleware' => 'App\Http\Middleware\Auth',
],function(){
  //Route du tableau de bord
  Route::get('/dashboard','CompteController@acceuil');
  //Route de modification de profile
  Route::get('/profile','CompteController@profile');
  Route::patch('edit','CompteController@editprofile');
  //Route pour ajouter//modifier/afficher/supprimer patients
  Route::resource('patient','PatientController');
  //Route pour ajouter un admin
  Route::get('add-admin','CompteController@new_admin');
  Route::post('add-admin-success','CompteController@add_admin');
  //Route pour afficher/ajouter/modifier/supprimer un numéro
  Route::resource('numeros','NumeroController');

});

//Route de deconnexion
Route::get('/deconnexion','CompteController@deconnexion');

//Route pour ajouter//modifier/afficher/supprimer patients
