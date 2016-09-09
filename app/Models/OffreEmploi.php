<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OffreEmploi extends Model {

	protected $table = 'offreEmplois';
	public $timestamps = false;

	public function suiviOffre()
	{
		return $this->hasOne('SuiviPostulant', 'offreEmploi');
	}

}