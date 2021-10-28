<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

// Route::get('dashboard/leaderboard', function () {
//     return view('leaderboard');
// });

Route::get('dashboard/detail', function () {
    return view('detail');
});

// Route::get('leaderboard', 'App\Http\Controllers\LeaderboardController@index');
Route::get('dashboard/leaderboard',[LeaderboardController::class, 'index']);