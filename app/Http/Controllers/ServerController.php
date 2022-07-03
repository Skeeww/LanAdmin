<?php

namespace App\Http\Controllers;

class ServerController extends Controller
{
    function list()
    {
        $data = json_decode(file_get_contents("http://192.168.1.56:1111/containers/json"));
        return view('server.list', [
            "data" => $data
        ]);
    }
}
