<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;

class DashboardController extends Controller
{
    public function index()
    {
        $game = Game::first();

        return view('dashboard', [
            'game' => $game,
            ]);
    }
}
