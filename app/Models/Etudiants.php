<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model {

	protected $table = 'etudiants';
	public $timestamps = false;

	public function cvtheque()
	{
		return $this->hasOne('Cvtheque');
	}

	public function suiviOffre()
	{
		return $this->hasOne('SuiviPostulant', 'etudiants');
	}

}