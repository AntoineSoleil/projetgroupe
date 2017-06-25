<?php
namespace App\Repositories;


use Carbon\Carbon;
use Illuminate\Database\Connection;
use Illuminate\Support\Facades\DB;

class OffresRepository
{
	public function getOffres()
	{
		$offres = DB::table('offre_emploi')
            ->select('id AS offreId', 'intitule', 'societe', 'status')
            ->get();

        return $offres;
	}


	public function createNouvelleOffre($intitule, $societe, $telephone, $mail, $website, $description)
	{
		DB::table('offre_emploi')->insert([
			'intitule' => $intitule,
			'societe' => $societe,
			'contact_phone' => $telephone,
			'contact_mail' => $mail,
			'website' => $website,
			'status' => 0,
			'description' => $description,
			'created_at' => Carbon::now(),
			'updated_at' => Carbon::now(),
		]);
	}

	public function getOneOffre($idOffre)
	{
		$offre = DB::table('offre_emploi')
            ->select('id AS offreId', 'intitule', 'societe', 'contact_phone AS telephone', 'contact_mail AS mail', 'website', 'description', 'status')
            ->where('id', $idOffre)
            ->get();

        return $offre;
	}


	public function deleteOffre($idOffre)
    {
        DB::table('offre_emploi')->where('id', "=", $idOffre)->delete();
    }


    public function attribuerOffre($idOffre)
	{
		DB::table('offre_emploi')->where('id', $idOffre)->update([
			'status' => 1, 
			'updated_at' => Carbon::now(),
		]);
	}

}