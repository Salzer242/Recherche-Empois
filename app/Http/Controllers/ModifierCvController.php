<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modifier;
use App\Models\Cv;
class ModifierCvController extends Controller
{
    //
    public function index(){

        $userCv = Cv::where('email', auth()->user()->email)->first();
    
       return view('pages.cv.modification',['userCv'=>$userCv]);
    }

    public function update(Request $request)
    {
        $task = Cv::findOrFail($request->id);

        // $this->validate($request, [
        //     'nom'=>'required',
        //      'prenom'=>'required',
        //      'adresse'=>'required',
        //      'email'=>'required',
        //      'telephone'=>'required',
        //      'specialite'=>'required',
        //      'niveauEtude'=>'required',
        //      'description'=>'required',
        //      'users_id'=> 'required'
        // ]);

        $input = $request->all();

        Cv::where('email', auth()->user()->email)->update([
            'nom'=> $request->nom,
             'prenom'=>$request->prenom,
             'adresse'=>$request->adresse,
             'email'=>$request->email,
             'telephone'=>$request->telephone,
             'specialite'=>$request->specialite,
             'niveauEtude'=>$request->etude, 
             'description'=>$request->propos,
            
        ]);

        

        // Session::flash('flash_message', 'Task successfully added!');

        return redirect()->back();
    }
}
