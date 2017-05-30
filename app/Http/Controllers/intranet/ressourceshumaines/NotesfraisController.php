<?php

namespace App\Http\Controllers\Intranet\Ressourceshumaines;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\AccesControlRepository;
use App\Repositories\NotesFraisRepository;
use App\Repositories\NotesFraisValidationRepository;
use Auth;

class NotesfraisController extends Controller
{
    protected $repoAccesControl;
    protected $repoNotesFrais;
    protected $repoNotesFraisValidation;
    protected $authUserId;



    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->repoAccesControl = new AccesControlRepository;
        $this->repoNotesFrais = new NotesFraisRepository;
        $this->repoNotesFraisValidation = new NotesFraisValidationRepository;
        $this->authUserId = Auth::user()->id;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-notesfrais-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $myNotesList = $this->repoNotesFrais->getMyNotesFraisList($this->authUserId);

        return view('intranet.ressourceshumaines.notesfrais.index', ['myNotesList' => $myNotesList]);
    }

    public function viewNotes()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-notesfrais-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        return view('intranet.ressourceshumaines.notesfrais.view');
    }

    public function create()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-notesfrais-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        return view('intranet.ressourceshumaines.notesfrais.create', ['currentUser' => Auth::user()]);
    }


    public function createNotesFrais(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-notesfrais-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $idNoteInsered = $this->repoNotesFrais->createNote($this->authUserId,
            $request->titre,
            $request->description,
            $request->montant,
            $request->responsable);

        $this->repoNotesFraisValidation->createNoteValidation($idNoteInsered);

        return redirect('/intranet/ressourceshumaines/notesfrais');

    }

    public function delete(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-ressourceshumaines-notesfrais-delete');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $this->repoNotesFrais->deleteNoteFrais($request->idNote);
        $this->repoNotesFraisValidation->deleteNoteFraisValidation($request->idNote);
    }
}
