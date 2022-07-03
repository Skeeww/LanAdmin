<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    function query(Request $request) {
        $validate = $request->validate(['query' => 'required']);
        $users = User::where('name', 'LIKE', "%{$validate['query']}%")
                    ->orWhere('email', 'LIKE', "%{$validate['query']}%")
                    ->get();
        $teams = Team::where('name', 'LIKE', "%{$validate['query']}%")
                    ->get();
        
        return view('search', ['query' => $validate['query'], 'users' => $users, 'teams' => $teams]);
    }
}
