<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bilde;

class Subpage extends Model
{
  protected $table = 'subpages';

  public function images(){
    return $this->hasMany('App\Bilde');
  }
}
