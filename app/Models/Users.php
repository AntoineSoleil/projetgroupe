<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {

	protected $table = 'users';
	public $timestamps = false;

	public function IpFormation()
	{
		return $this->hasOne('IpFormation', 'id_users');
	}

	public function entreprise()
	{
		return $this->hasOne('Entreprise', 'id_users');
	}

	public function etudiants()
	{
		return $this->hasOne('Etudiants', 'id_users');
	}

}