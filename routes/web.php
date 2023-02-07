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


Route::get('/',[HomeController::class, 'home'] )->name('home.home');


Route::get('/customers',[CustomerController::class, 'home'] )->name('customer.index');
Route::post('/customers',[CustomerController::class, 'store'] )->name('customer.store');
Route::get('/customers/{id}/edit',[CustomerController::class, 'edit'] )->name('customer.edit');
Route::put('/customers/{id}' ,[CustomerController::class, 'update'] )->name('customer.update');
Route::delete('/customers/{id}/destroy', [CustomerController::class, 'destroy'])->name('customer.destroy');

//Route::get('/stocks',[StockController::class, 'home'] )->name('stock.stocks')

Route::get('/orders',[OrderController::class, 'home'] )->name('order.index');
Route::post('/orders',[OrderController::class, 'store'] )->name('order.store');
Route::get('/order/{id}/edit',[OrderController::class, 'edit'] )->name('order.edit');
Route::put('/orders/{id}' ,[OrderController::class, 'update'] )->name('order.update');
Route::delete('/orders/{id}/destroy', [OrderController::class, 'destroy'])->name('order.destroy');

Route::get('/calibers',[CaliberController::class, 'home'] )->name('caliber.index');
Route::post('/calibers',[CaliberController::class, 'create'] )->name('caliber.create');
