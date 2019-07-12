<?php

namespace App\Http\Controllers;
use App\Game;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    //

    public function index(){


        $games = Game::whereNotNull('result1')->get();
        $results = Game::whereNotNull('result1')->get();
        return view('front.games',compact('games','results'));
    }
}
