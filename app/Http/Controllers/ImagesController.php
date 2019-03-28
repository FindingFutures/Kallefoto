<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image as EditImage;
use App\Image;

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

      $subpageImage = new Image;

      $image = $request->file('image');
      $info = getimagesize($image);
      $extension = image_type_to_extension($info[2]);
      $filename = time() . $extension;
      $location = public_path('images/subpages/' . $filename);
      EditImage::make($image)->save($location);

      $subpageImage->big_image = $filename;
      $subpageImage->subpage_id = $request->subpage_id;

      $dimensions = list($width, $height) = getimagesize($image);
      $width = ceil($dimensions[0]);
      $height = ceil($dimensions[1]);

      $location = public_path('images/subpages/' . 'small_' . $filename);
      $image = EditImage::load('images/subpages/' . $filename)->getWidth();
      $image = EditImage::make('images/subpages/' . $filename)->sepia(10)->save($location);

      $subpageImage->small_image = 'small_' . $filename;
      $subpageImage->save();

      return back()->withSuccess('Bilde lasta opp!');
    }
}
