<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CitiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ExportController;
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
    return view('frontend.pages.home');
});

Route::get('/solution-ges', function () {
    return view('frontend.pages.solution');
});

Route::get('/about-us', function () {
    return view('frontend.pages.about');
});

Route::get('/contact-us', function () {
    return view('frontend.pages.contact');
});

Route::get('/result-offering', function () {
    return view('frontend.pages.result');
});

// Route::get('/offering-ges-2', function () {
//     return view('frontend.pages.offering');
// });


Route::get('/admin', function () {
    return view('frontend.pages.login');
});



//backend site
Route::post('/export', [ExportController::class, 'exportToExcel']);
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
    'modules'=> ModulesController::class
]);

Route::get('/offering-ges', [OfferingController::class, 'index']);
Route::get('/offering', [OfferingController::class, 'index']);
Route::post('/offering/proses', [CustomerController::class, 'store']);
Route::delete('/product/{sku}/delete', [ProductController::class, 'delete']);
Route::get('/product/detail/{sku}', [ProductDetailController::class, 'productDetail']);
Route::put('/product/update/{sku}', [ProductDetailController::class, 'updateDetail']);
