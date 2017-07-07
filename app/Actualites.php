<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualites extends Model
{

  protected $table = 'actualites';

  protected $fillable = ['id', 'users_id', 'subject', 'content', 'created_at', 'updated_at'];

  public function user() {
       return $this->belongsTo('App\Users', 'users_id');
  }

  public function commentaire() {
       return $this->hasMany('App\Commentaires');
  }

  public static function boot()
 {
     parent::boot();

     // cause a delete of a product to cascade to children so they are also deleted
     static::deleted(function($actualite)
     {
         $actualite->commentaire()->delete();
     });
 }
}
