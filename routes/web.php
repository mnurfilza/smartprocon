<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CitiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\ModulesListController;
use App\Http\Controllers\ProductController;
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

Route::get('/admin', function () {
    return view('login');
});

Route::get('/offering', [ModulesListController::class, 'index']);


Route::post('/offering/proses', [CustomerController::class, 'store']);
Route::get('/upload', [ModulesController::class, 'show']);
Route::post('/upload/proses',[ModulesController::class, 'store']);
Route::get('/upload/show/{id}',[ModulesController::class, 'showPDF']);
Route::resource('city', CitiController::class);
Route::resource('category', CategorieController::class);
Route::resource('product', ProductController::class);