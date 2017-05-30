<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class ClientsRepository
{
	public function createClients($nomClient, $nomProjet, $debutMission, $finMission, $nomResponsableClient, $fonctionResponsableClient, $phoneResponsableClient, $emailResponsableClient, $nomResponsableFortil, $fonctionResponsableFortil, $phoneResponsableFortil, $emailResponsableFortil, $nomCollaborateur, $fonctionCollaborateur, $phoneCollaborateur, $emailCollaborateur)
	{
		$insertId = DB::table('clients')->insertGetId([
			'name_client' => $nomClient,
			'projet' => $nomProjet,
			'debut_mission' => $debutMission,
			'fin_mission' => $finMission,
			'name_responsable_client' => $nomResponsableClient,
			'fonction_responsable_client' => $fonctionResponsableClient,
			'phone_responsable_client' => $phoneResponsableClient,
			'mail_responsable_client' => $emailResponsableClient,
			'name_responsable_fortil' => $nomResponsableFortil,
			'fonction_responsable_fortil' => $fonctionResponsableFortil,
			'phone_responsable_fortil' => $phoneResponsableFortil,
			'mail_responsable_fortil' => $emailResponsableFortil,
			'name_collaborateur' => $nomCollaborateur,
			'fonction_collaborateur' => $fonctionCollaborateur,
			'phone_collaborateur' => $phoneCollaborateur,
			'mail_collaborateur' => $emailCollaborateur,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		return $insertId;
	}

	public function updateClients($nomClient, $nomProjet, $debutMission, $finMission, $nomResponsableClient, $fonctionResponsableClient, $phoneResponsableClient, $emailResponsableClient, $nomResponsableFortil, $fonctionResponsableFortil, $phoneResponsableFortil, $emailResponsableFortil, $nomCollaborateur, $fonctionCollaborateur, $phoneCollaborateur, $emailCollaborateur, $idClient)
	{
		DB::table('clients')->where('id', $idClient)->update([
			'name_client' => $nomClient,
			'projet' => $nomProjet,
			'debut_mission' => $debutMission,
			'fin_mission' => $finMission,
			'name_responsable_client' => $nomResponsableClient,
			'fonction_responsable_client' => $fonctionResponsableClient,
			'phone_responsable_client' => $phoneResponsableClient,
			'mail_responsable_client' => $emailResponsableClient,
			'name_responsable_fortil' => $nomResponsableFortil,
			'fonction_responsable_fortil' => $fonctionResponsableFortil,
			'phone_responsable_fortil' => $phoneResponsableFortil,
			'mail_responsable_fortil' => $emailResponsableFortil,
			'name_collaborateur' => $nomCollaborateur,
			'fonction_collaborateur' => $fonctionCollaborateur,
			'phone_collaborateur' => $phoneCollaborateur,
			'mail_collaborateur' => $emailCollaborateur,
			'updated_at' => Carbon::now(),
		]);
	}

	public function deleteClientCra($idClient)
    {
        DB::table('clients')->where('id', "=", $idClient)->delete();
    }

}