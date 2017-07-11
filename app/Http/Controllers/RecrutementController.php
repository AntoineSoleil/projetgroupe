<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class RecrutementController extends Controller
{
    public function index()
    {
      $emplois = DB::table('offre_emploi')
                ->get();

      return view('site.recrutement.index', [
        'emplois' => $emplois,
      ]);
    }
}
