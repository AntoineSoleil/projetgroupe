<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CongesRepository
{
	public function getMyCongesList($idUser)
	{
		$myCongesList = DB::select("SELECT conges.id AS congesId, conges.debutConges AS debutConges, conges.finConges AS finConges, conges_validation.status AS status
			FROM conges AS conges
			INNER JOIN conges_validation AS conges_validation ON conges.id = conges_validation.id_conges
			WHERE conges.id_users = " . $idUser . "
			ORDER BY conges.created_at DESC");
		return $myCongesList;
	}

	public function getWaitingValidationCongesList()
	{
		$waitingValidationCongesList = DB::select("SELECT conges.id AS congesId, conges.debutConges AS debutConges, conges.finConges AS finConges, conges_validation.status AS status, users.name AS userName
			FROM conges AS conges
			INNER JOIN conges_validation AS conges_validation ON conges.id = conges_validation.id_conges
			INNER JOIN users as users ON conges.id_users = users.id
			WHERE conges_validation.status = 2");
		return $waitingValidationCongesList;
	}

	public function getConges($idConges)
	{
		$conges = DB::select("SELECT conges.id AS congesId, conges.debutConges AS debutConges, conges.finConges AS finConges, conges.type AS type, conges.lieuCreation AS lieuCreation, conges.signature AS signature, conges.updated_at AS dateRedaction, users.name AS userName
			FROM conges AS conges
			INNER JOIN users AS users ON users.id = conges.id_users
			WHERE conges.id = " . $idConges);
		return $conges;
	}

	public function createConges($idUser, $lieuIntervention, $responsable, $debutConges, $finConges, $typeConges, $lieuCreation, $signature)
	{
		$insertId = DB::table('conges')->insertGetId([
			'id_users' => $idUser,
			'lieu_intervention' => $lieuIntervention,
			'responsable' => $responsable,
			'debutConges' => $debutConges,
			'finConges' => $finConges,
			'type' => $typeConges,
			'lieuCreation' => $lieuCreation,
			'Signature' => $signature,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		return $insertId;
	}

	public function updateConges($idConges, $debutConges, $finConges, $typeConges, $lieuCreation)
	{
		DB::table('conges')->where('id', $idConges)->update([
			'debutConges' => $debutConges, 
			'finConges' => $finConges, 
			'type' => $typeConges, 
			'LieuCreation' => $lieuCreation
		]);
	}

	public function deleteConges($idConges)
	{
		DB::table('conges')->where('id', "=", $idConges)->delete();
	}

}