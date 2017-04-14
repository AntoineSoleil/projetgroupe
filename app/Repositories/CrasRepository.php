<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CrasRepository
{
	public function createCras($idClients, $rapport, $nbrAccidentAvecArret, $nbrAccidentSansArret, $nbrAccidentTrajet, $nbrArretMaladie, $nbrJourConges, $nbrJourPresence)
	{
		$insertId = DB::table('cras')->insertGetId([
			'id_clients' => $idClients,
			'rapport' => $rapport,
			'accident_avec_arret' => $nbrAccidentAvecArret,
			'accident_sans_arret' => $nbrAccidentSansArret,
			'accident_trajet' => $nbrAccidentTrajet,
			'jours_arret_maladie' => $nbrArretMaladie,
			'absences' => $nbrJourConges,
			'nombre_jours_presence' => $nbrJourPresence,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		return $insertId;
	}

}