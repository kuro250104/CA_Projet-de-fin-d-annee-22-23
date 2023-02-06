<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CaliberController;


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
Route::get('/',[HomeController::class, 'home'] )->name('home.home');


Route::get('/customers',[CustomerController::class, 'home'] )->name('customer.index');
Route::post('/customers',[CustomerController::class, 'create'] )->name('customer.create');
Route::get('/customers/{id}/edit',[CustomerController::class, 'edit'] )->name('customer.edit');
Route::put('/customers/{id}' ,[CustomerController::class, 'update'] )->name('customer.update');
Route::delete('/customer', [CustomerController::class, 'delete'])->name('customer.destroy');

//Route::get('/stocks',[StockController::class, 'home'] )->name('stock.stocks')

Route::get('/orders',[OrderController::class, 'home'] )->name('order.index');
Route::post('/orders',[OrderController::class, 'create'] )->name('order.create');

Route::get('/calibers',[CaliberController::class, 'home'] )->name('caliber.index');
Route::post('/calibers',[CaliberController::class, 'create'] )->name('caliber.create');
