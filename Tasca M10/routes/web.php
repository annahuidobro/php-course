<?php

//use App\Http\Controllers\CatalogController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DeleteBookController;
use App\Http\Controllers\ShowCreateBookController;
use App\Http\Controllers\ShowEditBookController;
use App\Http\Controllers\StoreBookController;
use App\Http\Controllers\TestRequestController;
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
*/
/*
Route::get('/', function () {
    return view('Welcome to tasca M10');
});
*/
// new route for Paginas directory
/*Route::get('paginas', function () {
    return view('paginas/index');
});

// new route for vista1 view
Route::get('Paginas', function () {
    return view(Paginas / vista1());
});
*/
/*
//EXERCICE 1

//Home Route
Route::get('/', HomeController::class);
//Login route
Route::get('/login/{name?}', LoginController::class);
//Logout route
Route::get('/logout/{name?}', LogoutController::class);

//Catalog routes
Route::get('/catalog', [CatalogController::class,'list']);
Route::get('/catalog/show/{id}', [CatalogController::class, 'show']);

//route test >> Route::get('/catalog/create', [CatalogController::class, 'create']);
Route::post('/catalog/create', [CatalogController::class, 'create']);

//Route test >> Route::up('/catalog/edit/{id}', [CatalogController::class,'edit']);
Route::patch('/catalog/edit/{id}', [CatalogController::class,'edit']);
*/
//EXERCISE 2

//Home Route with blade
Route::get('/', function () {
    return view('home');
});


//Login route with blade
Route::get('/login', function (){
    return view('login');
});

//Catalog routes with blade
Route::get('/catalog', function(){
    return view('/catalog/index');
});

//Show Book tab with blade
Route::get('/catalog/show/{id}', function($id){
    return view('/catalog/show', ['book' => $id]);
});

//Create view with blade
Route::get('/catalog/create', ShowCreateBookController::class);
Route::post('/catalog/store', StoreBookController::class);

//Edit/Update view with blade
Route::get('/catalog/edit/{id?}', ShowEditBookController::class);
Route::post('/catalog/update', UpdateBookController::class);

//Delate view with blade
Route::get('/catalog/delete/{id?}', DeleteBookController::class);



//Update view with blade (exercise 2)
/*
Route::patch('/catalog/edit/{id}', function($id){
    return view('/catalog/edit', ['book'=> $id]);
});
*/

//Form rute (exercise 2)
//Route::match(['get','post'],'input',TestRequestController::class);


