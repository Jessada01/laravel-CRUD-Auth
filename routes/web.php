<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserCon;
use App\Http\Controllers\PDFController;


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
    return view('userhome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/home',[HomeController::class , 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::resource('products', ProductController::class);

Route::resource('orders', OrderController::class);

Route::get('delete/{id}',[ProductController::class,'deletepro']);

// --------------- Report ------------------- //
Route::get('redate', function () {return view('report_date');});
Route::get('reuser', function () {return view('report_list');}); //ของลูกค้า
Route::get('repro', function () {return view('report_pro');});
Route::get('rede', function () {return view('report_detail');});


Route::get('bill',[UserCon::class, 'bill']);
Route::get('report_detail',[PDFController::class, 'pdfde'])->name('report_detail');





