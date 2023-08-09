<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    public function addToGame()
    {
        $user = Auth::user();
        $userId = $user?->id;

        $gameCount = Player::count(); // Count the number of rows in the games table

        // Check if the game is full (8 or more people)
        $isGameFull = $gameCount >= 8;

        if ($isGameFull) {
            return redirect()->back()->with('error', 'The game is already full. You cannot join at the moment.');
        }
        // Insert a new row into the game table
        Player::create([
            'user_id' => $userId,
        ]);

        return redirect()->back()->with('success', 'Added to the game!');
    }

    public function leaveGame()
    {
        $loggedInUserId = auth()->id();

        // Find and delete the row with the user_id
        Player::where('user_id', $loggedInUserId)->delete();

        return redirect()->back()->with('success', 'You have left the game.');
    }

    public function kickUser($id){
        Player::where('user_id', $id)->delete();

        return redirect()->back();
    }

    public function updateGame(Request $request){

        $game = Game::first();

        $game->update([
            'start_date' => $request->input('start_date'),
            'buy_in' => $request->input('buy_in'),
            'time' => $request->input('time'),
        ]);

        // Redirect back with a success message or other desired action
        return redirect()->back()->with('success', 'Game information updated successfully');
    }

    public function resetGame()
    {
        Player::truncate();
        return redirect()->back()->with('success', 'You have left the game.');
    }
}
