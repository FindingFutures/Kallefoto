<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Image;
use Spatie\Image\Manipulations;
use ImageOptimizer;
use Tinify\Tinify;
use Config;

use App\Bilde;

class ImagesController extends Controller
{
    public function __construct()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
      $this->validate($request, array(
        'image' => 'required|image',
        'subpage_id' => 'required|integer'
      ));

      $subpageImage = new Bilde;

      $image = $request->file('image');
      $info = getimagesize($image);
      $extension = image_type_to_extension($info[2]);
      $filename = time() . $extension;
      $location = public_path('images/subpages/' . $filename);
      Image::make($image)->save($location);

      TiniFy::setkey(config('global.tinypng_key'));
      $compressedImage = \Tinify\fromFile($image);
      $compressedImage->toFile($image);

      $subpageImage->big_image = $filename;
      $subpageImage->subpage_id = $request->subpage_id;

      $dimensions = list($width, $height) = getimagesize($image);
      $width = ceil($dimensions[0] / 2);
      $height = ceil($dimensions[1] / 2);

      $location = public_path('images/subpages/' . 'small_' . $filename);
      $image = Image::make('images/subpages/' . $filename);

      $image->fit($width, $height);
      $image->save($location);

      $subpageImage->small_image = 'small_' . $filename;
      $subpageImage->save();

      return back()->withSuccess('Bilde lasta opp!');
    }
}
