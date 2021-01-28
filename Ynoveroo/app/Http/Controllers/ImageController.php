<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImageController extends Controller
{
    //

    public function imagePath($image_id) {
        if($image_id == null)
            return "";

        $image = DB::table('images')->where('id', $image_id)->first();


        return redirect( '/storage'.$image->file_path);
    }
}
