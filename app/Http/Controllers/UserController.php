<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    function list()
    {
        return view('user.list', [
            "users"     => (new User())->getUsersPagination()
        ]);
    }
}
