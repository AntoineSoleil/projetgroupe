<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CongesController extends Controller
{
    public function __construct()
    {
        
    }

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

    public function validation()
    {
        return view('intranet.ressourceshumaines.conges.validate');
    }
}
