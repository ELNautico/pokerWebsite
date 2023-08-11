<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/dashboard-user', [UserDashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('user.dashboard');
Route::post('/money-history', [UserDashboardController::class, 'store'])->name('money_history.store');
Route::post('/add-to-game', [GameController::class, 'addToGame'])->middleware(['auth', 'verified'])->name('game.add');
Route::post('/update-game', [GameController::class, 'updateGame'])->middleware(['auth', 'verified'])->name('game.update');
Route::post('/leave-the-game', [GameController::class, 'leaveGame'])->middleware(['auth', 'verified'])->name('game.leave');
Route::post('/reset-the-game', [GameController::class, 'resetGame'])->middleware(['auth', 'verified'])->name('game.reset');
Route::delete('/game-kick/{id}', [GameController::class, 'kickUser'])->middleware(['auth', 'verified'])->name('game.kick');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile', [ProfileController::class, 'store'])->name('profile.store');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
