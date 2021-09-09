<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\CreateMatchController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\DeleteMatchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeMatchesController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ShowCreateController;
use App\Http\Controllers\ShowCreateMatchController;
use App\Http\Controllers\ShowMatchController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\StoreMatchController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\UpdateMatchController;
use Illuminate\Support\Facades\Route;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

//Route::group(['middleware'=>'auth'], function() {
//Teams  routes CRUD

Route::get('/home', HomeController::class);
Route::get('/show/{id}', ShowController::class);
Route::post('/create', CreateController::class);
Route::get('/show-create', ShowCreateController::class);
Route::get('/update/{id}', UpdateController::class);
Route::post('/store', StoreController::class);
Route::post('/delete/{id}', DeleteController::class);

//Matches routes CRUD

Route::get('/home-matches', HomeMatchesController::class);
Route::post('/create-match', CreateMatchController::class);
Route::get('/show-match/{id}', ShowMatchController::class);
Route::get('/show-create-match', ShowCreateMatchController::class);
Route::get('/update-match/{id}', UpdateMatchController::class);
Route::post('/store-match', StoreMatchController::class);
Route::post('/delete-match/{id}', DeleteMatchController::class);
//});

