<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CongesRepository
{
	public function getMyCongesList($idUser)
	{
		$myCongesList = DB::select("SELECT conges.id, conges.debutConges AS debutConges, conges.finConges AS finConges, conges_validation.status AS status
			FROM conges AS conges
			INNER JOIN conges_validation AS conges_validation ON conges.id = conges_validation.id_conges
			WHERE conges.id_users = " . $idUser);
		return $myCongesList;
	}

	public function getWaitingValidationCongesList()
	{
		$waitingValidationCongesList = DB::select("SELECT conges.id, conges.debutConges AS debutConges, conges.finConges AS finConges, conges_validation.status AS status, users.name AS userName
			FROM conges AS conges
			INNER JOIN conges_validation AS conges_validation ON conges.id = conges_validation.id_conges
			INNER JOIN users as users ON conges.id_users = users.id
			WHERE conges_validation.status = 2");
		return $waitingValidationCongesList;
	}

}