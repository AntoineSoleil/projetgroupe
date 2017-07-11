<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use DB;

class ContactController extends Controller
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
        return view('site.contact.index');
    }

    public function contact (Request $request) {
      // Validation https://laravel.com/docs/5.2/validation
      // Sauvegarde en local du CV

      DB::tables('contact')
      ->insert([
        'champ1' => $request->input('champ1_name'),
      ]);

      return redirect()->route('contactIndex');
    }
}
