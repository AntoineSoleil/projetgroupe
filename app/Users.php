<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{

  protected $table = 'users';

  protected $fillable = ['id', 'name', 'email', 'created_at', 'updated_at'];

  public function actualite(){
       return $this->hasMany('App\Users');
  }

  public function commentaire(){
       return $this->hasMany('App\Commentaires');
  }

  public static function boot()
  {
     parent::boot();

     static::deleted(function($user)
     {
         $user->actualite()->delete();
         $user->commentaire()->delete();
     });
  }

}
