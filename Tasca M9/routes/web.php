<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaisController;
use App\Http\Controllers\RegisterController;
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

//Route::get('/', HomeController::class);
Route::get('/', function () {
    return "Welcome to home page";
});
Route::get('/login/{name?}', LoginController::class);
Route::get('/register', RegisterController::class);

// Exercise 5
Route::get('/paises', [PaisController::class, 'index']);
Route::post('/paises', [PaisController::class, 'store']);
Route::get('/paises/{pais}', [PaisController::class, 'show']);
Route::put('/paises/{pais}', [PaisController::class, 'update']);
Route::delete('/paises/{pais}', [PaisController::class, 'destroy']);

Route::delete('/paises/{pais}', [DEpartamentoController::class, 'index']);

Route::get('/paises/{pais}/departamentos', [DepartamentoController::class, 'index']);
Route::post('/paises/{pais}/departamentos', [DepartamentoController::class, 'store']);
Route::get('/paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'show']);
Route::put('/paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'update']);
Route::delete('/paises/{pais}/departamentos/{departamento}', [DepartamentoController::class, 'destroy']);

