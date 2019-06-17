<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Numero;

class NumeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Pour afficher la liste des numéros
      $numeros = numero::all();

      return view('numeros.index', compact('numeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view pour ajouter un numéro
        return view('numeros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Ajouter un numéro à la base de données
        request()->validate([
          'proprietaire' => ['required'],
          'numero' => ['required','numeric','min:8'],
        ]);

        $ajouternumero = numero::create([
          'proprietaire' => request('proprietaire'),
          'numero' => request('numero'),
        ]);

        if ($ajouternumero) {
           flash('Numéro ajouté avec succès.')->success();
           return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Récupérer les id des numéros
        $numero = numero::findOrFail($id);
        return view('numeros.edit', compact('numero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Valider les champs
        request()->validate([
          'proprietaire' => ['required'],
          'numero' => ['required','numeric','min:8'],
        ]);

        // Modifier le numéro dans la BD
      $numero = numero::findOrFail($id);
      $numero->numero = $request->get('numero');
      $numero->proprietaire = $request->get('proprietaire');
      $numero->save();
      flash('Numéro modifié avec succès.')->success();
      return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //// Supprimer un patient
        $numero = numero::find($id);
        $numero->delete();

        flash('Numéro supprimé avec succès.')->success();
        return back();
    }
}
