<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class ValidationCongesRepository
{
	public function createValidationConges($idConges)
	{
		DB::table('conges_validation')->insert([
			'id_conges' => $idConges,
			'status' => 2,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}

}