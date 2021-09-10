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

Route::get('/home', HomeController::class)->name('home');

Route::get('/list', ListController::class)->name('list');
Route::get('/list/{id}', ListController::class)->name('list_id');
Route::get('/show/{id}', ShowController::class)->name('show_id');

Route::post('/create', CreateController::class)->name('create');
Route::get('/showcreate', ShowCreateController::class)->name('show-create');

Route::get('/update/{id}', UpdateController::class)->name('update_id');
Route::post('/store', StoreController::class)->name('store');
Route::post('/delete/{id}',DeleteController::class)->name('delete_id');

