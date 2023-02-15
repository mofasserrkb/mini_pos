<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;

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
    return view('admin.login');
});




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/dashboard',[ProductController::class,'admin'])->name('admin');
    Route::get('/saleproduct',[ProductController::class,'getProductCustomer'])->name('saleproducts');
    Route::post('/getOrder',[SaleController::class,'getOrder'])->name('orders.store');
    Route::get('/addproduct',[ProductController::class,'addProduct'])->name('addproduct');
    Route::get('/allproduct',[ProductController::class,'index'])->name('allproduct');
    Route::post('/storeproduct',[ProductController::class,'store'])->name('products.store');
    Route::post('/addcustomer',[CustomerController::class,'store'])->name('customer.store');
    Route::get('/getreport',[ProductController::class,'getReport'])->name('report');
    Route::get('/product/{product}',[ProductController::class,'show'])->name('show');
    Route::post('/update/{product}',[ProductController::class,'update'])->name('products.update');
    Route::delete('/delete/{product}',[ProductController::class,'destroy'])->name('products.delete');


    });



//

require __DIR__.'/auth.php';
