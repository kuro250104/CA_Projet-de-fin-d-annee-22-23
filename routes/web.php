<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StockController;

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
    return view('customer.index');
});

Route::get('/index',[CustomerController::class, 'index'] )->name('customer.index');


Route::get('/customers',[CustomerController::class, 'home'] )->name('customer.customers');


// Route::get('/stocks',[StockController::class, 'home'] )->name('stock.stocks');
Route::get('/orders',[OrderController::class, 'home'] )->name('order.orders');