<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class NotesFraisRepository
{
	public function getMyNotesFraisList($idUser)
	{
		$myCrasList = DB::table('note_frais')
			->select('note_frais.titre')
			->where('note_frais.id_createur', $idUser)
            ->get();
		return $myCrasList;
	}


	public function createNote($idCreateur, $titre, $description, $montant, $responsable)
	{
		$insertId = DB::table('note_frais')->insertGetId([
			'id_createur' => $idCreateur,
			'titre' => $titre,
			'description' => $description,
			'montant' => $montant,
			'responsable' => $responsable,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		return $insertId;
	}

}