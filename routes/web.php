<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\HousesController;
use App\Http\Controllers\UsersController;
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

Route::get('/',[CatalogController::class,'index']);
Route::resource('houses',HousesController::class);
Route::get('/inicio',[DepartamentosController::class,'getIndex']);
Route::get('/depa/{id}',[DepartamentosController::class,'getDepa']);

Route::delete('/logout',[UsersController::class,'logout']);
Route::post('/login',[UsersController::class,'login']);
Route::post('/registro',[UsersController::class,'registro']);
Route::view('/registro','users.registro');
Route::view('/login','users.login');
