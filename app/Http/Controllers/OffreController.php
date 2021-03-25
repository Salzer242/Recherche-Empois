<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Offres;
class OffreController extends Controller
{
    public function offres(){
        return view('pages/users/offres');
    }

    function addOffre(Request $req)
    {
        $offres = new Offres;
        $offres->descriptionEmplois=$req->description;
        $offres->datePublication=$req->dateP;
        $offres->dateLimite=$req->dateL;
        $offres->adresse=$req->adresse;
        $offres->entreprise=$req->entreprise;
        $offres->contrat=$req->contrat;
        $offres->save();

        return redirect('offres');
    }
}

