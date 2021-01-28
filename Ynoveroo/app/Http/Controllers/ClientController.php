<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function profile() {
        $user = auth()->user();

        return view('profile',[
            'user' => $user,
        ]);

    }

    public function process() {
        request()->validate([
            'email' => ['required', 'email'],
            'birthday' => ['required', 'date'],
            'address' => ['required'],
        ]);

        $user = auth()->user();

        $user->email = request('email');
        $user->clientProfile()->birthday = request('birthday');
        $user->clientProfile->address = request('address');

        if($user->isDirty())
            $user->save();

        if($user->clientProfile->isDirty())
            $user->clientProfile->save();

        return redirect('/profil');
    }

}
