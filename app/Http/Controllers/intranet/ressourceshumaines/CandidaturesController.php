<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use App\Repositories\CandidaturesRepository;
use Auth;

class CandidaturesController extends Controller
{
    protected $repoAccesControl;
    protected $authUserId;
    protected $repoCandidature;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->repoCandidature = new CandidaturesRepository;
        $this->authUserId = Auth::user()->id;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-candidatures-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $candidaturesList = $this->repoCandidature->getCandidatures();
        return view('intranet.ressourceshumaines.candidatures.index', ['candidaturesList' => $candidaturesList]);
    }

    public function viewCandidat(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-candidatures-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $candidat = $this->repoCandidature->getCandidat($request->idCandidat);

        return view('intranet.ressourceshumaines.candidatures.viewCandidat', ['candidat' => $candidat[0]]);
    }
}
