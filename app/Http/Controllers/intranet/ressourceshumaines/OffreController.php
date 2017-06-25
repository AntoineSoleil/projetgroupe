<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use App\Repositories\OffresRepository;
use Auth;

class OffreController extends Controller
{
    protected $repoAccesControl;
    protected $authUserId;
    protected $repoOffres;
    
    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->authUserId = Auth::user()->id;
        $this->repoOffres = new OffresRepository;
    }

    public function index()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-offres-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $listeOffres = $this->repoOffres->getOffres();
        return view('intranet.ressourceshumaines.offre.index', ['listeOffres' => $listeOffres]);
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

    public function create(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-offres-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        
        
        $this->repoOffres->createNouvelleOffre($request->intitule, 
            $request->societe, 
            $request->telephone, 
            $request->mail, 
            $request->website, 
            utf8_encode($request->description));

        return redirect('/intranet/ressourceshumaines/offres');
    }


    public function view(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-offres-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        

        $offre = $this->repoOffres->getOneOffre($request->idOffre);
        return view('intranet.ressourceshumaines.offre.view', ['offre' => $offre[0]]);
    }
}
