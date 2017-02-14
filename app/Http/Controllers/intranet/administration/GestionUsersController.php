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
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionutilisateur-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }


		$repoGestionUsers = new GestionUsersRepository;
		$usersList = $repoGestionUsers->getUsersList();
        return view('intranet.administration.gestionusers.index', ['usersList' => $usersList]);
    }

	public function addUser()
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionutilisateur-create');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        return view('intranet.administration.gestionusers.addUser');
    }

	public function updateRoles()
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionattributionrole-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $repoGestionUsers = new GestionUsersRepository;
        $rolesList = $repoGestionUsers->getRoleList();
        $userRoles = $repoGestionUsers->getUserRoles($authUserId);


        //$userRoles = $repoGestionUsers->addRoleToUser(3, 5);
        $userRoles = $repoGestionUsers->deleteRoleToUser(3, 5);

        return view('intranet.administration.gestionusers.updateRoles', ['authUser' => Auth::user(), 'rolesList' => $rolesList, 'userRoles' => $userRoles]);
    }

    public function addRoleToUserAjax()
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionattributionrole-update');
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
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionattributionrole-delete');
        if($userAllowed == false)
        {
            //Renvoyer une erreur pour l'AJAX
        }

        //Récupérer la valeur de l'id Utilisateur du Delete
        //Récupérer la valeur de l'id Role du Delete
        //$userRoles = $repoGestionUsers->deleteRoleToUser($userId, $roleId);
    }
}
