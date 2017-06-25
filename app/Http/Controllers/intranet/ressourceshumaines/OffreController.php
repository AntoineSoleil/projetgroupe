<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffreController extends Controller
{
    
    public function __construct()
    {
        
    }

    public function index()
    {
        return view('intranet.ressourceshumaines.offre.index');
    }


    public function createView()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-offres-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        
        return view('intranet.ressourceshumaines.offre.create');
    }
}
