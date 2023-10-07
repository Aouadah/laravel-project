<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameslistController extends Controller
{
    public function create()
    {
        return view('gameslist.create');
    }
}
