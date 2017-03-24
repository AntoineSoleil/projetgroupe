<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use App\Repositories\CongesRepository;
use App\Repositories\ValidationCongesRepository;
use Auth;

class CongesController extends Controller
{
    protected $repoAccesControl;
    protected $repoConges;
    protected $authUserId;


    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->repoConges = new CongesRepository;
        $this->repoValidationConges = new ValidationCongesRepository;
        $this->authUserId = Auth::user()->id;
    }

    public function index()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $canValidate = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-validate');

        $myCongesList = $this->repoConges->getMyCongesList($this->authUserId);
        $waitingValidationCongesList = $this->repoConges->getWaitingValidationCongesList();

        return view('intranet.ressourceshumaines.conges.index', ['myCongesList' => $myCongesList, 'canValidate' => $canValidate, 'waitingValidationCongesList' => $waitingValidationCongesList]);
    }

    public function view(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        $conges = $this->repoConges->getCongesWithValidation($request->idConges);
        return view('intranet.ressourceshumaines.conges.view', ['conges' => $conges]);
    }

    public function create()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        
        return view('intranet.ressourceshumaines.conges.create', ['currentUser' => Auth::user()]);
    }

    public function createConges(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $insertId = $this->repoConges->createConges($this->authUserId, $request->lieuIntervention, $request->responsable, date("Y-m-d", strtotime($request->debutConges)), date("Y-m-d", strtotime($request->finConges)), $request->TypeConges, $request->LieuCreation, $request->signatureDemandeur);

        $this->repoValidationConges->createValidationConges($insertId);

        return redirect('/intranet/ressourceshumaines/conges');
    }

    public function updateView(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        $conges = $this->repoConges->getConges($request->idConges);
        return view('intranet.ressourceshumaines.conges.update', ['conges' => $conges]);
    }

    public function update(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $this->repoConges->updateConges($request->idConges, date("Y-m-d", strtotime($request->debutConges)), date("Y-m-d", strtotime($request->finConges)), $request->TypeConges, $request->LieuCreation);
        return redirect('/intranet/ressourceshumaines/conges');
    }

    public function delete(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-delete');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $idConges = $request->idConges;
        $this->repoConges->deleteConges($idConges);
        $this->repoValidationConges->deleteValidation($idConges);
        
    }

    public function validationView(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-validate');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $conges = $this->repoConges->getConges($request->idConges);
        return view('intranet.ressourceshumaines.conges.validate', ['conges' => $conges]);
    }

    public function validation(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-validate');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $this->repoValidationConges->validateConges($request->idConges, $this->authUserId, $request->validation, $request->signatureResponsable, $request->signatureDirigeant, $request->commentaire);
        return redirect('/intranet/ressourceshumaines/conges');
    }
}
