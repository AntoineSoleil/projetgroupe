<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use App\Repositories\ClientsRepository;
use App\Repositories\CrasRepository;
use App\Repositories\CrasEvaluationRepository;
use App\Repositories\CrasValidationRepository;
use Auth;

class CraController extends Controller
{
    protected $repoAccesControl;
    protected $repoClients;
    protected $repoCras;
    protected $repoCrasEvaluation;
    protected $repoCrasValidation;
    protected $authUserId;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->repoClients = new ClientsRepository;
        $this->repoCras = new CrasRepository;
        $this->repoCrasEvaluation = new CrasEvaluationRepository;
        $this->repoCrasValidation = new CrasValidationRepository;
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

    public function create(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        //Création + Insertion dans la table client + recupération de l'id de l'insertion
        $insertIdClients = $this->repoClient->createConges($request->nomClient, 
            $request->projet, 
            $request->debutMission, 
            $request->finMission, 
            $request->nomResponsableClient, 
            $request->fonctionResponsableClient, 
            $request->$phoneResponsableClient, 
            $request->emailResponsableClient, 
            $request->nomResponsableFortil, 
            $request->fonctionResponsableFortil, 
            $request->phoneResponsableFortil, 
            $request->emailResponsableFortil, 
            $request->nomCollaborateur, 
            $request->fonctionCollaborateur, 
            $request->phoneCollaborateur, 
            $request->emailCollaborateur);
        
        //Création + Insertion dans la table cras
        $insertIdCras = $this->repoCras->createCras($insertIdClients, 
            $request->rapport, 
            $request->accidentAvecArret, 
            $request->accidentSansArret, 
            $request->accidentTrajet, 
            $request->arretMaladie, 
            $request->nbrJourConges, 
            $request->nbrJourPresence);

        //Création de la ligne dans la table cras_evaluations
        $this->repoCrasEvaluation->createCrasEvaluation($insertIdCras);


        //creation de la ligne dans la table cras_validation
        $this->repoCrasValidation->createCrasEvaluation($insertIdCras);
        
        return view('intranet.ressourceshumaines.cra.create', ['currentUser' => Auth::user()]);
    }
}
