<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_path'
    ];

    public static function fileUpload(Request $req){
        $req->validate([
            'logo' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $fileModel = new Image;

        if($req->file()) {
            $fileName = time().'_'.$req->logo->getClientOriginalName();
            $filePath = $req->file('logo')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->logo->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();

            return $fileModel;
        }
    }
}
