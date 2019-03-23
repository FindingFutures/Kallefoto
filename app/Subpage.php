<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subpage extends Model
{
  protected $table = 'subpages';

  public function images(){
    return $this->hasMany('image');
  }
}
