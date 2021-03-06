<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documents extends Model
{

  protected $table = 'documents';

  protected $fillable = ['id', 'filename', 'mime', 'name', 'description', 'id_users', 'created_at', 'updated_at'];

}
