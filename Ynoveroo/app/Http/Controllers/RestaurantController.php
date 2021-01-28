<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    //
    public function process(Request $req) {
        $req->validate([
            'email' => ['required', 'email'],
            'logo' => 'mimes:jpg,jpeg,png|max:2048',
            'address' => ['required'],
        ]);
        $user = auth()->user();

        $logo = Image::fileUpload($req);

        $user->email = $req->email;
        $user->restaurantProfile->image_id = $logo->id;
        $user->restaurantProfile->address = $req->address;

        if($user->isDirty())
            $user->save();

        if($user->restaurantProfile->isDirty())
            $user->restaurantProfile->save();

        return redirect('/profil');
    }
}
