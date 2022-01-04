<?php

use App\Http\Controllers\CitiController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerOfferingController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\LoginContoller;
use App\Http\Controllers\PreviewExcel;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\TypeObjectController;
use App\Http\Controllers\OfferingController;
use App\Http\Controllers\OngkirController;
use App\Http\Controllers\OngkosPasangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\SolutionsPackageController;
use App\Http\Controllers\SubSolutionPackageController;
use App\Http\Controllers\TypeBarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FilteringController;
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
})->name('login')->middleware('guest');



//backend site
Route::post('/export', [ExportController::class, 'exportToExcel'])->name('export');
Route::post('/result',[CustomerOfferingController::class, 'postOffering']);
Route::post('/excel/preview', [PreviewExcel::class, 'previewExportToExcel']);
Route::get('/offering-ges', [OfferingController::class, 'index']);
Route::get('/offering', [OfferingController::class, 'index']);
Route::post('/offering/proses', [CustomerController::class, 'store']);
Route::delete('/product/{sku}/delete', [ProductController::class, 'delete']);
Route::get('/product/detail/{sku}', [ProductDetailController::class, 'productDetail']);
Route::put('/product/update/{sku}', [ProductDetailController::class, 'updateDetail']);
Route::post('/login', [LoginContoller::class, 'process_login']);
Route::post('/logout', [LoginContoller::class, 'logout']);
Route::get('/filter_ongkir', [FilteringController::class, 'filtering']);
Route::get('/filter_pasang', [FilteringController::class, 'filtering_pasang']);
Route::get('/filter_barang', [FilteringController::class, 'filtering_barang']);
Route::get('/filter_customer', [FilteringController::class, 'filtering_customer']);






Route::middleware(['auth'])->group(function () {
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
        'modules'=> ModulesController::class,
        'user'=> UserController::class,
    ]);
    
});
    




