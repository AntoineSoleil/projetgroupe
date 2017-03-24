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

	public function deleteValidation($idConges)
	{
		DB::table('conges_validation')->where('id_conges', "=", $idConges)->delete();
	}

	public function validateConges($idConges, $idValidateur, $validation, $signatureResponsable, $signatureDirigeant, $commentaire)
	{
		DB::table('conges_validation')->where('id_conges', $idConges)->update([
			'status' => $validation, 
			'id_Validateur' => $idValidateur,
			'signature_responsable' => $signatureResponsable, 
			'signature_dirigeant' => $signatureDirigeant, 
			'commentaire' => $commentaire,
			'date_signature_responsable' => Carbon::now(),
			'date_signature_dirigeant' => Carbon::now()
		]);
	}

}