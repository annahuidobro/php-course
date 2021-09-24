<?php

use App\Http\Controllers\API\PictureController;
use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\API\ShopController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\API\DeleteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', RegisterController::class);
/*
Route::middleware('auth:api')->group(function () {
    Route::resource('pictures', PictureController::class);
});
*/
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::middleware('jwt.auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    // Crear botiga: li direm el nom i la capacitat (POST /shops/).
    Route::post('/shops', [ShopController::class, 'create'])->name('create-shop');

    // Llistar botigues: retorna la llista de botigues amb el seu nom i la capacitat (GET /shops/).
    Route::get('/shops', [ShopController::class, 'index'])->name('shops-list');

    //Afegir quadre: li donarem el nom del quadre i el del autor (POST /shops/{ID}/pictures)
    Route::post('/shops/{IdShop}/pictures', [PictureController::class, 'create'])->name('add');

    //Llistar els quadres de la botiga (GET /shops/{ID}/pictures)
    Route::get('/shops/{IdShop}/pictures', [PictureController::class, 'list'])->name('picture-list');

    // Incendiar quadres: per si ve la policia, es poden eliminar tots els quadres de la botiga sense deixar rastre (DELETE /shops/{ID}/pictures).
        Route::delete('/shops/{shopId}/pictures', [DeleteController::class,'delete'])->name('delete');


    //  Route::get('pictures', [ProductController::class, 'index'])->name('pictures.index');
//Route::post('pictures',[ProductController::class,store])->name('pictures.store');
//Route::delete('pictures',[ProductController::class,delete])->name('pictures.delete');
});
