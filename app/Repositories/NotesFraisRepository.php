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
            ->join('note_frais_validation AS nfv', 'nfv.id_note_frais', '=', 'note_frais.id')
			->select('note_frais.id AS noteId', 'note_frais.titre', 'nfv.status AS statutValidation')
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
			'id_responsable' => $responsable,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
		return $insertId;
	}

	public function deleteNoteFrais($idNote)
	{
		DB::table('note_frais')->where('id', "=", $idNote)->delete();
	}


	public function getNoteAndValidation($idNote)
	{
		$myCrasList = DB::table('note_frais')
            ->join('note_frais_validation AS nfv', 'nfv.id_note_frais', '=', 'note_frais.id')
            ->join('users', 'users.id', '=', 'note_frais.id_createur')
            ->join('users AS responsable', 'users.id', '=', 'id_responsable')
			->select('note_frais.id AS noteId', 
				'note_frais.titre', 
				'note_frais.description', 
				'note_frais.montant', 
				'nfv.status AS statutValidation', 
				'nfv.commentaire', 
				'nfv.signature_responsable', 
				'users.name', 
				'responsable.name AS responsable')
			->where('note_frais.id', $idNote)
            ->get();
		return $myCrasList;
	}

	public function getNote($idNote)
	{
		$myCrasList = DB::table('note_frais')
            ->join('users', 'users.id', '=', 'note_frais.id_createur')
            ->join('users AS responsable', 'users.id', '=', 'id_responsable')
			->select('note_frais.id AS noteId', 
				'note_frais.titre', 
				'note_frais.description', 
				'note_frais.montant', 
				'users.name',
				'responsable.name AS responsable')
			->where('note_frais.id', $idNote)
            ->get();
		return $myCrasList;
	}


	public function getNoteAValider($idUser)
	{
		$myCrasList = DB::table('note_frais')
            ->join('note_frais_validation AS nfv', 'nfv.id_note_frais', '=', 'note_frais.id')
            ->join('users', 'users.id', '=', 'note_frais.id_createur')
			->select('note_frais.id AS noteId', 
				'note_frais.titre', 
				'nfv.status AS statutValidation', 
				'users.name AS createur')
			->where('note_frais.id_responsable', $idUser)
			->where('nfv.status', 2)
            ->get();
		return $myCrasList;
	}

	public function updateNote($idNote, $titre, $description, $montant)
	{
		DB::table('note_frais')->where('id', $idNote)->update([
			'titre' => $titre,
			'description' => $description,
			'montant' => $montant,
			'updated_at' => Carbon::now(),
		]);
	}

	public function getAdministrateurs()
	{
		$administrateursList = DB::table('users')
            ->join('users_roles AS ur', 'ur.id_users', '=', 'users.id')
            ->join('roles AS rol', 'rol.id', '=', 'ur.id_roles')
			->select('users.id AS userId', 'users.name AS userName')
			->where('rol.name', "Administrateur")
            ->get();
		return $administrateursList;
	}

}