<?php

//use App\Http\Controllers\CatalogController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DeleteBookController;
use App\Http\Controllers\DoLoginController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ShowCreateBookController;
use App\Http\Controllers\ShowEditBookController;
use App\Http\Controllers\StoreBookController;
use App\Http\Controllers\AddBookController;

use App\Http\Controllers\UpdateBookController;
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


//EXERCICE 1

//Home Route
Route::get('/', HomeController::class)->name('home');
//Login route
Route::get('/login/{name?}', LoginController::class)->name('login');
//Logout route
Route::get('/logout/{name?}', LogoutController::class)->name('logout');

//Catalog routes
Route::get('/catalog', [CatalogController::class,'list']);
Route::get('/catalog/show/{id}', [CatalogController::class, 'show'])->name('show');

//route test >> Route::get('/catalog/create', [CatalogController::class, 'create']);
Route::post('/catalog/create', [CatalogController::class, 'create'])->name('create');

//Route test >> Route::up('/catalog/edit/{id}', [CatalogController::class,'edit']);
Route::patch('/catalog/edit/{id}', [CatalogController::class,'edit'])->name('edit');
*/
//EXERCISE 2

//Home Route with blade
Route::get('/', function () {
    return view('home');
})->name('home');



//Login route with blade
/*
Route::get('/login', function (){
    return view('login');
})->name('login');*/
Route::get('/login', LoginController::class)->name('login');
Route::post('/do-login', DoLoginController::class)->name('dologin');


//Catalog routes with blade
Route::get('/catalog', function(){
    return view('/catalog/index');})->name('catalog');

//Show Book tab with blade
/*
Route::get('/catalog/show/{id}', function($id){
    return view('/catalog/show/{id?)');
})->name('show');*/
Route::get('/catalog/show/{id}', ShowController::class)->name('show');

//Create view with blade
Route::get('/catalog/create', ShowCreateBookController::class)->name('create');
Route::post('/catalog/store', StoreBookController::class)->name('store');

//Edit/Update view with blade
Route::get('/catalog/edit/{id?}', ShowEditBookController::class)->name('edit');
Route::post('/catalog/update', UpdateBookController::class)->name('update');;

//Delate view with blade
Route::get('/catalog/delete/{id?}', DeleteBookController::class)->name('delete');



//Update view with blade (exercise 2)
/*
Route::patch('/catalog/edit/{id}', function($id){
    return view('/catalog/edit', ['book'=> $id]);
})->name('update');
*/

//Form rute (exercise 2)
//Route::match(['get','post'],'input',TestRequestController::class);

// Cookie test
Route::get('CookieTest',LoginController::class);

//Login route with blade (excercise 2)
/*
Route::get('/login', function (){
    return view('login');
});
*/
//Logout route with blade (excercise 6)
Route::get('login',LoginController::class);

//Register route with blade (excercise 6)
Route::get('register', RegisterController::class);
Route::post('register', RegisterController::class);

//Password recovery route with blade (excercise 6)
Route::get('passrecovery', PassrecoveryController::class);
Route::post('passrecovery', PassrecoveryController::class);
