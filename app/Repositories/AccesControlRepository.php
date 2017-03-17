<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;


class AccesControlRepository
{
	public function isAllowed($authUserId, $ressourceTested)
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
