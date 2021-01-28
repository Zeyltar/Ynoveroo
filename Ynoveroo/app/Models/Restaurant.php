<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'image_id',
    ];

    public function getImagePath($image_id) {
        if($image_id == null)
            return "";

        $image = DB::table('images')->where('id', $image_id)->first();

        return $image->file_path;
    }
}
