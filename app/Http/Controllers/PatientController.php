<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;


class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Pour afficher la liste des patients
        $patients = patient::all();

        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // la view d'ajouter un patients
        return view('patients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Valider un patient
        request()->validate([
          'NomComplet' => ['required'],
          'tel' => ['required','numeric'],
          'cin' => ['required'],
          'birthday' => ['required'],
          'adresse' => [],
          'organisme'=> ['required'],
          'dateconsultation' => ['required'],
          'datecontrole' => ['nullable'],
        ]);
         //Ajouter patient dans la BD
        $ajouterpatient = patient::create([
          'nom_complet' => request('NomComplet'),
          'tel' => request('tel'),
          'cin' => request('cin'),
          'birthday' => request('birthday'),
          'adress' => request('adresse'),
          'organisme' => request('organisme'),
          'dateconsultation' => request('dateconsultation'),
          'datecontrole' => request('datecontrole'),
        ]);

        if ($ajouterpatient) {
           flash('Patient ajouté avec succès.')->success();
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
        // Pour afficher un patient
        $contact = patient::find($id);
        return view('patient.edit', compact('patient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // Trouver l'id d'un patient pour le modifier
        $patient = patient::findOrFail($id);
        return view('patients.edit', compact('patient'));
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
      // modifier le patient
      request()->validate([
        'NomComplet' => ['required'],
        'tel' => ['required','numeric'],
        'cin' => ['required'],
        'birthday' => ['required'],
        'adresse' => [],
        'organisme'=> ['required'],
        'datecontrole' => ['nullable'],
        'echographie' => ['nullable'],
        'cat' => ['nullable'],
        'traitement' => ['nullable'],
        'bilan' => ['nullable'],
      ]);

        // Modifier le patient dans la BD
      $patient = patient::find($id);
      $patient->nom_complet = $request->get('NomComplet');
      $patient->tel = $request->get('tel');
      $patient->cin = $request->get('cin');
      $patient->birthday = $request->get('birthday');
      $patient->adress = $request->get('adresse');
      $patient->organisme = $request->get('organisme');
      $patient->datecontrole = $request->get('datecontrole');
      $patient->echographie_renale = $request->get('echographie');
      $patient->cat = $request->get('cat');
      $patient->traitement = $request->get('traitement');
      $patient->bilan = $request->get('bilan');
      $patient->save();
      flash('Patient modifié avec succès.')->success();
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
        // Supprimer un patient
        $patient = patient::findOrFail($id);
        $patient->delete();

        flash('Patient supprimé avec succès.')->success();
        return back();
    }
}
