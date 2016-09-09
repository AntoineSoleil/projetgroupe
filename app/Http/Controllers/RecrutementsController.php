<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Recrutement;

class RecrutementsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.recrutement.index');
    }

   

    protected function create(Request $request)
    {
        $recrutement = new Recrutement();
        $recrutement->sexe = $request->input('sexe');
        $recrutement->option = $request->input('option');
        $recrutement->nom = $request->input('nom');
        $recrutement->prenom = $request->input('prenom');
        $recrutement->adresse = $request->input('adresse');
        $recrutement->cp = $request->input('cp');
        $recrutement->ville = $request->input('ville');
        $recrutement->pays = $request->input('pays');
        $recrutement->telephone = $request->input('telephone');
        $recrutement->email = $request->input('email');
        $recrutement->message = $request->input('message');
        $recrutement->save();

        
      //  dd($_FILE);

       /* if (Input::file('cv')->isValid()) {
          $destinationPath = 'uploads'; // upload path
          $extension = Input::file('cv')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renameing image
          Input::file('cv')->move($destinationPath, $fileName); // uploading file to given path
        }
        else {
          // sending back with error message.
          Session::flash('error', 'uploaded file is not valid');
        }*/
        return redirect('/recrutement/index');
    }
}
