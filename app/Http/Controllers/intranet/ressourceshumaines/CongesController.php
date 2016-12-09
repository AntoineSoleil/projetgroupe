<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CongesController extends Controller
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
        return view('intranet.ressourceshumaines.conges.index');
    }

    public function view()
    {
        return view('intranet.ressourceshumaines.conges.view');
    }


    public function create()
    {
        return view('intranet.ressourceshumaines.conges.create');
    }
}
