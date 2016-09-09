<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model {

	protected $table = 'roles';
	public $timestamps = false;

	public function rolesSectionDroit()
	{
		return $this->hasMany('RolesSectionsDroits', 'id_roles');
	}

	public function users()
	{
		return $this->hasMany('UsersRoles', 'id_roles');
	}

}