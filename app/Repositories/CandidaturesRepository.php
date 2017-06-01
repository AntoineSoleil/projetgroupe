<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CandidaturesRepository
{
	public function getCandidatures()
	{
		$candidatureList = DB::table('candidatures')
			->leftjoin('offre_emploi', 'candidatures.id_offer', '=', 'offre_emploi.id')
			->select('candidatures.id AS candidatureId', 
				'candidatures.name AS candidatName', 
				'candidatures.first_name AS candidatFirstName', 
				'candidatures.type AS candidatureType', 
				'offre_emploi.intitule AS offrePostule')
            ->get();
		return $candidatureList;
	}


	public function getCandidat($idCandidat)
	{
		
	}

}