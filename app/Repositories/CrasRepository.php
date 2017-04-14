<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CrasRepository
{
	public function createCras($idCreateurCra, $idClients, $rapport, $nbrAccidentAvecArret, $nbrAccidentSansArret, $nbrAccidentTrajet, $nbrArretMaladie, $nbrJourConges, $nbrJourPresence)
	{
		$insertId = DB::table('cras')->insertGetId([
			'id_createur_cras' => $idCreateurCra,
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

	public function getMyCrasList($idUser)
	{
		$myCrasList = DB::table('cras')
            ->join('clients AS cli', 'cras.id_clients', '=', 'cli.id')
            ->join('cras_evaluation AS crev', 'cras.id', '=', 'crev.id_cras')
            ->join('cras_validation AS crva', 'cras.id', '=', 'crva.id_cras')
			->select('cras.id AS craId', 'cli.name_client AS nomClient', 'cli.projet AS nomProjet', 'crev.status AS statutEvaluation', 'crva.status AS statutValidation')
			->where('cras.id_createur_cras', $idUser)
            ->get();
		return $myCrasList;
	}

	public function getCras($idCras)
	{
		$cra = DB::table('cras')
            ->join('clients AS cli', 'cras.id_clients', '=', 'cli.id')
            ->join('cras_evaluation AS crev', 'cras.id', '=', 'crev.id_cras')
            ->join('cras_validation AS crva', 'cras.id', '=', 'crva.id_cras')
            ->select('cli.projet', 'cli.name_client', 'cli.name_responsable_client', 'cli.name_responsable_fortil', 'cli.name_collaborateur', 'cli.fonction_responsable_client', 'cli.fonction_responsable_fortil', 'cli.fonction_collaborateur', 'cli.mail_responsable_client', 'cli.mail_responsable_fortil', 'cli.mail_collaborateur', 'cli.phone_responsable_client', 'cli.phone_responsable_fortil', 'cli.phone_collaborateur', 'cli.debut_mission', 'cli.fin_mission',
            	'cras.rapport', 'cras.accident_avec_arret', 'cras.accident_sans_arret', 'cras.accident_trajet', 'cras.jours_arret_maladie', 'cras.absences', 'cras.nombre_jours_presence', 
            	'crev.satisfaction_client', 'crev.satisfaction_consultant', 'crev.ameliorations', 'crev.actions_restantes', 'crev.commentaires',
            	'crva.status', 'crva.signature_client', 'crva.signature_fortil', 'crva.signature_consultant', 'crva.date_signature_client', 'crva.date_signature_fortil', 'crva.date_signature_consultant')
            ->where('cras.id', $idCras)
            ->get();

        return $cra;
	}

}