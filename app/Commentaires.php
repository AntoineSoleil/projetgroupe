<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaires extends Model
{

  protected $table = 'commentaires';

  protected $fillable = ['id', 'users_id', 'actualites_id', 'content', 'created_at', 'updated_at'];

  public function user() {
       return $this->belongsTo('App\Users', 'users_id');
  }

  public function commentaire() {
       return $this->belongsTo('App\Actualites', 'actualites_id');
  }
}
