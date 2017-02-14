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
}
