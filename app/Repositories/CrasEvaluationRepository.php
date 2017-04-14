<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CrasEvaluationRepository
{
	public function createCrasEvaluation($idCras)
	{
		DB::table('cras_evaluation')->insert([
			'id_cras' => $idCras,
			'status' => 0,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}

}