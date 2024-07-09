<?php

namespace App\Http\Controllers;
use App\Http\Controllers\EtudiantController;
use App\Models\Etudiant;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function liste_etudiant()
    {
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }

    public function ajouter_etudiant()
    {
        return view('etudiant.ajout');
    }
    
//request pour enregistrer les paramètres  dans la bd
    public function ajouter_etudiant_traitement(Request $request)
    {
        $request->validate([ 
            'nom' => 'required',
            'prenoms' => 'required',
            'matricule' => 'required',
        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenoms = $request->prenoms;
        $etudiant->matricule = $request->matricule;
        $etudiant->save();

        return redirect('/ajouter')->with('status','etudiant bien enrégistrer.');
    }
//Modifier étudiant
    public function update_etudiant($id){
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant.update', compact('etudiant'));
    }
     
    public function update_etudiant_traitement(Request $request){
        
        $request->validate([ 
            'nom' => 'required',
            'prenoms' => 'required',
            'matricule' => 'required',
        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenoms = $request->prenoms;
        $etudiant->matricule = $request->matricule;
        $etudiant->update();

        return redirect('/etudiant')->with('status','etudiant modifier.');
    }
    //request pour supprimer un étudiant
    public function delete_etudiant($id){
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return redirect('/etudiant')->with('status', 'Etudiant supprimer avec succès ');
    }
}
