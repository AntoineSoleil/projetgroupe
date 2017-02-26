<?php

namespace App\Http\Controllers\Intranet\Administration;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GestionRolesRepository;
use App\Repositories\AccesControlRepository;
use Auth;

class GestionRolesController extends Controller
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
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionrole-read');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $repoGestionRoles = new GestionRolesRepository;
        $rolesList = $repoGestionRoles->getRoleList();
        return view('intranet.administration.gestionroles.index', ['rolesList' => $rolesList]);
    }

    public function updateRessources(Request $request)
    {
        $authUserId = Auth::user()->id;
        $repoAccesControl = new AccesControlRepository;
        $userAllowed = $repoAccesControl->isAllowed($authUserId, 'intranet-administration-gestionrole-update');
        if($userAllowed == false)
        {
            return redirect('/intranet');
        }

        $idRole = $request->idRole;
        $repoGestionRoles = new GestionRolesRepository;
        $role = $repoGestionRoles->getRoleById($idRole);
        $ressourcesList = $repoGestionRoles->getRessourcesForRole($idRole);

        return view('intranet.administration.gestionroles.updateRessources', ['role' => $role, 'ressourcesList' => $ressourcesList]);
    }

    public function addRole()
    {
        return view('intranet.administration.gestionroles.addRole');
    }

    public function addRolePost(Request $request)
    {
        $roleName = $request->roleName;
        $roleDesc = $request->roleDesc;

        $repoGestionRoles = new GestionRolesRepository;
        $repoGestionRoles->addRole($roleName, $roleDesc);

        return redirect('/intranet/administration/gestionroles');
    }
}
