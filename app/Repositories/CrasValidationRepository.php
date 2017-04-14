<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class CrasValidationRepository
{
	public function createCrasValidation($idCras)
	{
		DB::table('cras_validation')->insert([
			'id_cras' => $idCras,
			'status' => 2,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}

}