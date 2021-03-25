<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Cv;
class CvController extends Controller
{
    //
    public function cv(){
        return view('pages/cv/creation');
    }

    function addCv(Request $req)
    {
        $cv = new cv;
        $cv->nom=$req->nom;
        $cv->prenom=$req->prenom;
        $cv->adresse=$req->adresse;
        $cv->email=$req->email;
        $cv->telephone=$req->numero;
        $cv->specialite=$req->specialite;
        $cv->niveauEtude=$req->etude;
        $cv->description=$req->propos;
        $cv->save();

        return redirect('cv/creation');
    }
}
