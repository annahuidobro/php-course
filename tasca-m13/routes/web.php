<?php

use App\Http\Controllers\ShowController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ShowCreateController;
use App\Http\Controllers\StoreController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', HomeController::class)->name('home');
Route::get('/show-create', ShowCreateController::class)->name('show_create');
Route::post('/create', CreateController::class)->name('create');
Route::get('/edit/{id}', EditController::class)->name('edit');
Route::get('/show/{id}', ShowController::class)->name('show_id');
Route::post('/store', StoreController::class)->name('store');
Route::get('/delete/{id}', DeleteController::class)->name('delete');
