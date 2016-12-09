<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section_site extends Model {

	protected $table = 'section_sites';
	public $timestamps = false;

	public function rolesSectionDroit()
	{
		return $this->hasMany('RolesSectionsDroits', 'id_section');
	}

}