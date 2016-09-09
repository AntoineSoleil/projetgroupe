<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IpFormation extends Model {

	protected $table = 'ipFormation';
	public $timestamps = false;

	public function cras()
	{
		return $this->hasMany('Cra', 'auteur');
	}

	public function documentsTravail()
	{
		return $this->hasMany('DocumentsTravail', 'auteur');
	}

	public function conges()
	{
		return $this->hasMany('Conges', 'auteur');
	}

	public function notesFrais()
	{
		return $this->hasMany('NotesFrais', 'auteur');
	}

	public function actualites()
	{
		return $this->hasMany('Actualites', 'auteur');
	}

	public function roles()
	{
		return $this->hasMany('UsersRoles', 'id_users');
	}

}