<?php

namespace App\Http\Controllers\Intranet\Administration;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GestionUsersRepository;

class GestionUsersController extends Controller
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
		$repoGestionUsers = new GestionUsersRepository;


		$usersList = $repoGestionUsers->getUsersList();
        return view('intranet.administration.gestionusers.index', ['usersList' => $usersList]);
    }
}
