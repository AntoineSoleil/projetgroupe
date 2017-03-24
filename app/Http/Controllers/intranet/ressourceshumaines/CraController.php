<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use Auth;

class CraController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->authUserId = Auth::user()->id;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('intranet.ressourceshumaines.cra.index');
    }

    public function createView()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        
        return view('intranet.ressourceshumaines.cra.create', ['currentUser' => Auth::user()]);
    }
}
