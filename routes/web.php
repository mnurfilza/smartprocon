<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CitiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\ModulesListController;
use App\Http\Controllers\TypeObjectController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\OngkosPasangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetail;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SolutionsPackageController;
use App\Http\Controllers\SubSolutionPackageController;
use App\Http\Controllers\TypeBarangController;
use App\Models\SubSolutionPackage;
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


Route::resources([
    'product' => ProductController::class,
    'type_barang' => TypeBarangController::class,
    'regional' => CitiController::class,
    'ongkir' => OngkirController::class,
    'ongkos_pasang' => OngkosPasangController::class,
    'solution' => SolutionController::class,
    'type_object' => TypeObjectController::class,
    'solutions_package' => SolutionsPackageController::class,
    'sub_solution_package' => SubSolutionPackageController::class,
    'customer' => CustomerController::class,

]);
Route::get('/offering', [OfferingController::class, 'index']);

Route::post('/offering/proses', [CustomerController::class, 'store']);
Route::get('/upload', [ModulesController::class, 'show']);
Route::post('/upload/proses',[ModulesController::class, 'store']);
Route::get('/upload/show/{id}',[ModulesController::class, 'showPDF']);
Route::delete('/product/{sku}/delete', [ProductController::class, 'delete']);
Route::get('/product/detail/{sku}', [ProductDetailController::class, 'productDetail']);
Route::put('/product/update/{sku}', [ProductDetailController::class, 'updateDetail']);
