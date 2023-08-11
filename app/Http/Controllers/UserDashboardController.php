<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\MoneyHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $game = Game::first();

        $money_history = MoneyHistory::where('user_id', $user?->id)->get();
        return view('user-dashboard', [
            'user' => $user,
            'money_history' => $money_history,
            'game' => $game,
        ]);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        try {
            $request->validate([
                'date_of_transaction' => 'required|date',
                'buy_in' => 'required|numeric|min:0',
                'payed_out' => 'required|numeric|min:0',
            ]);

            MoneyHistory::create([
                'user_id' => $user->id,
                'date_of_transaction' => $request->input('date_of_transaction'),
                'buy_in' => $request->input('buy_in'),
                'payed_out' => $request->input('payed_out')
            ]);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['payed_out' => 'Der Betrag ist zu groß.'])->withInput();
        }

        $difference = $request->payed_out - $request->buy_in;
        $user->money += $difference;
        $user->save();

        return redirect()->back()->with('success', 'Transaction added successfully.');
    }
}
