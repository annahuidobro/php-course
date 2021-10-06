<?php

use App\Http\Controllers\GamesController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
//JWT uthentication routes

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('/logout', [AuthController::class,'logout']);
    Route::post('/refresh', [AuthController::class,'refresh']);
    Route::post('/me', [AuthController::class,'me']);

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/register', RegisterController::class);
// Create a player
Route::post('/players', [PlayersController::class, 'create'])->name('player-create');
//Modify player name
Route::put('/players/{id}', [PlayersController::class, 'update'])->name('player-update');
//Player {Id} rolls dices
Route::post('/players/{id}/games/', [GamesController::class, 'play'])->name('play');
//eliminates player rolls
Route::delete('/players/{id}/games', [GamesController::class, 'delete'])->name('delete');
//returns the list of all players in the system with their average success rate
Route::get('/players/', [PlayersController::class, 'list_players'])->name('list_players');
//returns the list of plays by a player
Route::get('/players/{id}/games/', [PlayersController::class, 'list_games'])->name('list_games');
//returns the average ranking of all players in the system. That is, the average success rate.
Route::get('/players/ranking', [RankingController::class, 'ranking'])->name('ranking');
//Returns the player with the worst success rate
Route::get('/players/ranking/loser', [RankingController::class, 'loser'])->name('loser');
//returns the player with the best success rate.
Route::get('/players/ranking/winner', [RankingController::class, 'winner'])->name('winner');
