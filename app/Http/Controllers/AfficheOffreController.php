<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;
use App\Models\Offres;
class AfficheOffreController extends Controller
{
    function show()
    {
        $offres = Offres::all();
         
        return view('pages.users.offres',['offres'=>$offres]);
    }

    function showCv()
    {
        $user =  auth()->user();
        // dd($user->email);

        $data = Cv::where('email', $user->email)->first();
        // dd($data);
        return view('pages.cv.affichage',['cvs'=>$data]);
    }
}
