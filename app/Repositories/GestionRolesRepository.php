<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class GestionRolesRepository
{
	public function getRoleList()
	{
		$roleList = DB::select("SELECT rol.id, rol.name, rol.description
			FROM roles AS rol");
		return $roleList;
	}

	public function getRoleById($idRole)
	{
		$role = DB::select("SELECT rol.id, rol.name, rol.description
			FROM roles AS rol
			WHERE rol.id = " . $idRole);
		return $role;
	}

	public function getRessourcesForRole()
    {
    	$ressourcesList = DB::select("SELECT res.id, res.name, res.description, GROUP_CONCAT(rol.id SEPARATOR ',') AS role
			FROM ressources AS res
			LEFT JOIN roles_ressources AS rol_res ON rol_res.id_ressources = res.id
			LEFT JOIN roles AS rol ON rol.id = rol_res.id_roles
			GROUP BY res.name
			ORDER BY res.name");
		return $ressourcesList;
    }

	public function addRole($roleName, $roleDesc)
    {
    	DB::insert("INSERT INTO roles (name, description, created_at, updated_at)
 			VALUES ('". $roleName . "', '". $roleDesc . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s") . "')");
    }

}
