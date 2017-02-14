<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

/*class GestionUsersRepository
{
	public function getUsersList()
	{
		$usersList = DB::select("SELECT u.id AS userId, u.name AS name, u.email AS email, GROUP_CONCAT(r.name SEPARATOR ', ' ) AS roles 
			FROM users AS u 
			LEFT JOIN users_roles AS ur ON ur.id_users = u.id
			LEFT JOIN roles AS r ON r.id = ur.id_roles
			GROUP BY u.id;");
		return $usersList;
	}
    
}*/

class AccesControlRepository
{
	public function isAllowedOrRedirect($authUserId, $ressourceTested)
	{
		$userRessource = DB::select("SELECT DISTINCT(res.name) 
			FROM ressources AS res
			INNER JOIN roles_ressources AS rr ON res.id = rr.id_ressources
			INNER JOIN roles as rol ON rr.id_roles = rol.id
			INNER JOIN users_roles AS ur ON rol.id = ur.id_roles
			WHERE ur.id_users = " . $authUserId . "
			ORDER BY res.name");


		foreach($userRessource as $ressource)
		{
			if($ressource->name == $ressourceTested)
			{
				return true;
			}
		}
		return false;
	}
}
