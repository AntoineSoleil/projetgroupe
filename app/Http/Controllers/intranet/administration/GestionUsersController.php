<?php

namespace App\Http\Controllers\Intranet\Administration;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GestionUsersRepository;
use App\Repositories\AccesControlRepository;
use Auth;

class GestionUsersController extends Controller
{

    protected $repoAccesControl;
    protected $authUserId;
    protected $repoGestionUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->authUserId = Auth::user()->id;
        $this->repoAccesControl = new AccesControlRepository;
        $this->repoGestionUsers = new GestionUsersRepository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-administration-gestionutilisateur-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }


		$usersList = $this->repoGestionUsers->getUsersList();
        return view('intranet.administration.gestionusers.index', ['usersList' => $usersList]);
    }

	public function addUser()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-administration-gestionutilisateur-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        return view('intranet.administration.gestionusers.addUser');
    }


    public function addUserPost(Request $request)
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-administration-gestionutilisateur-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $this->repoGestionUsers->addUser($request->userName, $request->userMail, $request->userPassword);
        return redirect('/intranet/administration/gestionutilisateurs');
    }

    public function addRolePost(Request $request)
    {
        //$roleName = $request->roleName;
        //$roleDesc = $request->roleDesc;

        $this->repoGestionUsers->addUser();

        return redirect('/intranet/administration/gestionusers');
    }

	public function updateRoles()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-administration-gestionattributionrole-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $rolesList = $this->repoGestionUsers->getRoleList();
        $userRoles = $this->repoGestionUsers->getUserRoles($this->authUserId);

        return view('intranet.administration.gestionusers.updateRoles', ['authUser' => Auth::user(), 'rolesList' => $rolesList, 'userRoles' => $userRoles]);
    }

    public function addRoleToUserAjax()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-administration-gestionattributionrole-update');
        if($userAllowed == false)
        {
            //Renvoyer une erreur pour l'AJAX
        }

        //Récupérer la valeur de l'id Utilisateur du Post
        //Récupérer la valeur de l'id Role du Post
        //$userRoles = $repoGestionUsers->addRoleToUser($userId, $roleId);
    }

    public function deleteRoleToUserAjax()
    {
        $userAllowed = $this->repoAccesControl->isAllowed($this->authUserId, 'intranet-administration-gestionattributionrole-delete');
        if($userAllowed == false)
        {
            //Renvoyer une erreur pour l'AJAX
        }

        //Récupérer la valeur de l'id Utilisateur du Delete
        //Récupérer la valeur de l'id Role du Delete
        //$userRoles = $repoGestionUsers->deleteRoleToUser($userId, $roleId);
    }
}
