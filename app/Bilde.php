<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Tinify\Tinify;

class Bilde extends Model
{

  protected $table = 'images';

  public function page(){
    return $this->belongsTo('App\Subpage');
  }

  static function compressImage($image){

    TiniFy::setkey('uUwVmaNdSY7U6hZBcL4JBCEtlPyQf3Tc');
    $compressedImage = \Tinify\fromFile($image);
    $compressedImage->toFile($image);

    return;

  }

}
