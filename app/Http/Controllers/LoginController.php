<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    }

    function logout() {
        Auth::logout();
        return redirect('/');
    }
}
