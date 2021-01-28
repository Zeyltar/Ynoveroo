<?php

namespace App\Http\Controllers;

use App\Models\User as User;
use Illuminate\Http\Request;

class ConnectionController extends Controller
{
    //
    public function form() {
        return view('login');
    }

    public function process(Request $req) {
        $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $result = auth()->attempt([
            'email' => $req->email,
            'password' => $req->password,
        ]);
        if ($result)
            return redirect('/');
        else
            return back()->withErrors([
                'email' => 'Adresse email incorrecte',
                'password' => 'Mot de passe incorrect',
            ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
