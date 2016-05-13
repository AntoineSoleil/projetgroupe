<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualite extends Model
{
    public static function getTitreById($id)
    {
    	return Actualite::find($id)->titre;
    }
}
