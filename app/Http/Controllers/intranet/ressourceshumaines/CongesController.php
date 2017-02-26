<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use Auth;

class CongesController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-ressourceshumaines-conges-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        return view('intranet.ressourceshumaines.conges.index');
    }

    public function view()
    {
        return view('intranet.ressourceshumaines.conges.view');
    }

    public function create()
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-ressourceshumaines-conges-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        
        return view('intranet.ressourceshumaines.conges.create', ['currentUser' => Auth::user()]);
    }

    public function validation()
    {
        return view('intranet.ressourceshumaines.conges.validate');
    }
}
