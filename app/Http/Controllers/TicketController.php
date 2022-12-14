<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class TicketController extends Controller
{
    function index() {
        $res = Cache::remember("tickets", 480, function() {
            return file_get_contents("https://www.billetweb.fr/api/event/480574/attendees?user=105490&key=a87ff679a2f3e71d9181a67b7542122c&version=1");
        });
        $json = json_decode($res, true);
        return view('ticket.index', ["data" => $json]);
    }
}
