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
			->select('candidatures.id AS candidatureId', 
				'candidatures.name AS candidatName', 
				'candidatures.first_name AS candidatFirstName', 
				'candidatures.type AS candidatureType', 
				'candidatures.id_offer AS offrePostule')
            ->get();
		return $candidatureList;
	}

}