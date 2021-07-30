<?php

use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ShowCreateController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('home');
});

Route::get('/home', HomeController::class);

Route::get('/list', ListController::class);
Route::get('/list/{id}', ListController::class);
Route::get('/show/{id}', ShowController::class);

Route::post('/create', CreateController::class);
Route::get('/showcreate', ShowCreateController::class);

Route::get('/update/{id}', UpdateController::class);
Route::post('/store', StoreController::class);
Route::post('/delete/{id}',DeleteController::class);

