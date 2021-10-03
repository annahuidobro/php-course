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
/*
Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', [AuthController::class,'login']);
    Route::post('/logout', [AuthController::class,'logout']);
    Route::post('/refresh', [AuthController::class,'refresh']);
    Route::post('/me', [AuthController::class,'me']);

});
*/
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('/register', RegisterController::class);

Route::post('/players', [PlayersController::class, 'create'])->name('player-create');
Route::put('/players/{id}', [PlayersController::class, 'update'])->name('player-update');
Route::post('/players/{id}/games/', [GamesController::class, 'play'])->name('play');
Route::delete('/players/{id}/games', [GamesController::class, 'delete'])->name('delete');

//retorna el llistat de tots els jugadors del sistema amb el seu percentatge mig d’èxits
Route::get('/players/', [PlayersController::class, 'list_players'])->name('list_players');

//retorna el llistat de jugades per un jugador
Route::get('/players/{id}/games/', [PlayersController::class, 'list_games'])->name('list_games');


//GET /players/ranking: retorna el ranking mig de tots els jugadors del sistema. És a dir, el percentatge mig d’èxits.
Route::get('/players/ranking', [RankingController::class, 'ranking'])->name('ranking');


// GET /players/ranking/loser: retorna el jugador amb pitjor percentatge d’èxit
Route::get('/players/ranking/loser', [RankingController::class, 'loser'])->name('loser');

//GET /players/ranking/winner: retorna el jugador amb pitjor percentatge d’èxit.
Route::get('/players/ranking/winner', [RankingController::class, 'winner'])->name('winner');
