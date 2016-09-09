<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model {

	protected $table = 'entreprises';
	public $timestamps = false;

	public function offreEmplois()
	{
		return $this->hasMany('OffreEmploi', 'auteur');
	}

}