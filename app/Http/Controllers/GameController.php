<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function addToGame()
    {
        $user = Auth::user();
        $userId = $user?->id;

        $gameCount = Game::count(); // Count the number of rows in the games table

        // Check if the game is full (8 or more people)
        $isGameFull = $gameCount >= 8;

        if ($isGameFull) {
            return redirect()->back()->with('error', 'The game is already full. You cannot join at the moment.');
        }
        // Insert a new row into the game table
        Game::create([
            'user_id' => $userId,
        ]);

        return redirect()->back()->with('success', 'Added to the game!');
    }

    public function leaveGame()
    {
        $loggedInUserId = auth()->id();

        // Find and delete the row with the user_id
        Game::where('user_id', $loggedInUserId)->delete();

        return redirect()->back()->with('success', 'You have left the game.');
    }

    public function kickUser($id){
        Game::where('user_id', $id)->delete();

        return redirect()->back();
    }

    public function resetGame()
    {
        Game::truncate();
        return redirect()->back()->with('success', 'You have left the game.');
    }
}
