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

        $myCongesList = $this->repoConges->getMyCongesList($this->authUserId);
        $waitingValidationCongesList = $this->repoConges->getWaitingValidationCongesList();

        return view('intranet.ressourceshumaines.conges.index', ['myCongesList' => $myCongesList, 'waitingValidationCongesList' => $waitingValidationCongesList]);
    }

    public function view()
    {
        return view('intranet.ressourceshumaines.conges.view');
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

    public function update(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-conges-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }
        
        $idConges = $request->idConges;
        $conges = $this->repoConges->getConges($idConges);
        return view('intranet.ressourceshumaines.conges.update', ['conges' => $conges]);
    }

    public function validation()
    {
        return view('intranet.ressourceshumaines.conges.validate');
    }
}
