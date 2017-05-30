<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class NotesFraisValidationRepository
{
	/*public function getMyNotesFraisList($idUser)
	{
		$myCrasList = DB::table('note_frais')
			->select('note_frais.id AS noteId', 'note_frais.titre')
			->where('note_frais.id_createur', $idUser)
            ->get();
		return $myCrasList;
	}*/


	public function createNoteValidation($idNote)
	{
		DB::table('note_frais_validation')->insert([
			'id_note_frais' => $idNote,
			'status' => 2,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}

}