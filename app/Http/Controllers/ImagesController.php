<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic;
use Image;

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
        'image' => 'required|image'
      ));

      $databaseImage = new Image;

      if ($request->hasFile('image')) {
        $image = $request->file('image');
        $info = getimagesize($image);
        $extension = image_type_to_extension($info[2]);
        $filename = time() . $extension;
        $location = public_path('images/' . $filename);
        Image::make($image)->save($location);

        $databaseImage->image = $filename;
      }

      $img = ImageManagerStatic::make($request->image)->encode('png', 75);
    }
}
