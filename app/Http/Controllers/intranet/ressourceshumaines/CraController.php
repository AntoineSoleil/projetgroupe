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
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $myCrasList = $this->repoCras->getMyCrasList($this->authUserId);

        return view('intranet.ressourceshumaines.cra.index', ['myCrasList' => $myCrasList]);
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
        $insertIdClients = $this->repoClients->createClients($request->nomClient, 
            $request->projet, 
            $request->debutMission, 
            $request->finMission, 
            $request->nomResponsableClient, 
            $request->fonctionResponsableClient, 
            $request->phoneResponsableClient, 
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
        $insertIdCras = $this->repoCras->createCras($this->authUserId,
            $insertIdClients, 
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
        $this->repoCrasValidation->createCrasValidation($insertIdCras);
        
        return redirect('/intranet/ressourceshumaines/cras');
    }

    public function craView(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $cra = $this->repoCras->getCra($request->idCra);

        return view('intranet.ressourceshumaines.cra.craView', ['cra' => $cra[0]]);
    }

    public function updateCraView(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $cra = $this->repoCras->getCra($request->idCra);

        return view('intranet.ressourceshumaines.cra.updateCraView', ['cra' => $cra[0]]);
    }

    public function updateCra(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        //Update dans la table client
        $this->repoClients->updateClients($request->nomClient, 
            $request->projet, 
            $request->debutMission, 
            $request->finMission, 
            $request->nomResponsableClient, 
            $request->fonctionResponsableClient, 
            $request->phoneResponsableClient, 
            $request->emailResponsableClient, 
            $request->nomResponsableFortil, 
            $request->fonctionResponsableFortil, 
            $request->phoneResponsableFortil, 
            $request->emailResponsableFortil, 
            $request->nomCollaborateur, 
            $request->fonctionCollaborateur, 
            $request->phoneCollaborateur, 
            $request->emailCollaborateur,
            $request->idClient);
        
        //Update dans la table cras
        $this->repoCras->updateCras($request->rapport, 
            $request->accidentAvecArret, 
            $request->accidentSansArret, 
            $request->accidentTrajet, 
            $request->arretMaladie, 
            $request->nbrJourConges, 
            $request->nbrJourPresence,
            $request->idCra);

        
        return redirect('/intranet/ressourceshumaines/cras');
    }

    public function evaluationView(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $cra = $this->repoCras->getCras($request->idCra);

        return view('intranet.ressourceshumaines.cra.evaluation', ['cra' => $cra[0]]);
    }


    public function delete(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-cra-delete');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $idCra = $request->idCra;
        $Client = $this->repoCras->getIdClientsFromIdCra($idCra);

        //Suppression dans les tables clients, cras, cras_evaluation et cras_validation
        $this->repoCrasValidation->deleteCraValidation($idCra);
        $this->repoCrasEvaluation->deleteCraEvaluation($idCra);
        $this->repoCras->deleteCra($idCra);
        $this->repoClients->deleteClientCra($Client[0]->id_clients);
    }


}
