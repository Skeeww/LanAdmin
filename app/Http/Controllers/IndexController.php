<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;

class IndexController extends Controller
{
    // Index page
    function index() {
        $user = new User();
        $team = new Team();
        
        return view("index", [
            "users_count"   => $user->getNumberOfUsers(),
            "teams_count"   => $team->getNumberOfTeams(),
            "last_users"    => $user->getLast10Users()
        ]);
    }
}
