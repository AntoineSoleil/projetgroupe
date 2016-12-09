<?php

namespace App\Http\Controllers\Intranet\Boiteoutils;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BoiteoutilsController extends Controller
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
        return view('intranet.boiteoutils.index');
    }
}
