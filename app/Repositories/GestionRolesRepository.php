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

	public function addRole($roleName, $roleDesc)
    {
    	DB::insert("INSERT INTO roles (name, description, created_at, updated_at)
 			VALUES ('". $roleName . "', '". $roleDesc . "', '" . date("Y-m-d H:i:s") . "', '" . date("Y-m-d H:i:s") . "')");
    }
}
