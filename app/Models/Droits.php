<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Droits extends Model {

	protected $table = 'droits';
	public $timestamps = false;

	public function rolesSectionDroit()
	{
		return $this->hasMany('RolesSectionsDroits', 'id_droits');
	}

}