<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use Auth;

class OffreController extends Controller
{
    protected $repoAccesControl;
    protected $authUserId;
    
    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->authUserId = Auth::user()->id;
        
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
