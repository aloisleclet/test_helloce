<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $primaryKey = 'id';  
  protected $table = 'profiles';
  public $incrementing = true;
  protected $keyType = 'int';
  public $timestamps = false;
  protected $connection = 'mysql';
}
