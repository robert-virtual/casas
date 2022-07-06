<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\DepartamentosController;
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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/inicio',[DepartamentosController::class,'getIndex']);
Route::get('/depa/{id}',[DepartamentosController::class,'getDepa']);
