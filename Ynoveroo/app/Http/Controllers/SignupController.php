<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Restaurant;
use App\Models\User as User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function clientForm() {
        return view('signup');
    }

    public function clientProcess(Request $req) {
        $req->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'birthday' => ['required', 'date'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Votre mot de passe doit faire au minimum :min caractères'
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
        ]);

        $client = Client::create([
            'user_id' => $user->id,
            'birthday' => $req->birthday,
            'currency' => 1000,
        ]);

        return redirect('/');
    }

    public function restaurantForm() {
        return view('restaurant-signup');
    }

    public function restaurantProcess(Request $req) {
        $req->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'address' => ['required'],
            'logo' => 'mimes:jpg,jpeg,png|max:2048',
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Votre mot de passe doit faire au minimum :min caractères'
        ]);

        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
        ]);

        $restaurant = Restaurant::create([
            'user_id' => $user->id,
            'address' => $req->address,
        ]);

        return redirect('/');
    }
}
