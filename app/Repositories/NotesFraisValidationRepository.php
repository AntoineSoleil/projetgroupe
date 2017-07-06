<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class NotesFraisValidationRepository
{

	public function createNoteValidation($idNote)
	{
		DB::table('note_frais_validation')->insert([
			'id_note_frais' => $idNote,
			'status' => 2,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}

	public function deleteNoteFraisValidation($idNote)
	{
		DB::table('note_frais_validation')->where('id_note_frais', "=", $idNote)->delete();
	}

	public function validationNote($idNote, $status, $commentaire, $signature)
	{
		DB::table('note_frais_validation')->where('id_note_frais', $idNote)->update([
			'status' => $status,
			'commentaire' => $commentaire,
			'signature_responsable' => $signature,
			'updated_at' => Carbon::now(),
		]);
	}

}