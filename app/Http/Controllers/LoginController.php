<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index() {
        return view('login');
    }

    function login(Request $request) {
        $validate = $request->validate([
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        if(Auth::attempt(['email' => $validate['email'], 'password' => $validate['password']])) {
            return redirect('/');
        }
        return redirect()->back()->withErrors(["Aucun compte trouvé avec ces identifiants"]);
    }

    function logout() {
        Auth::logout();
        return redirect('/');
    }
}
