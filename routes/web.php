<?php 

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\OrderdetailsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProductsController;



use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/sales', function () {
    return view('sales');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/orders', 
[OrdersController::class, 'ordersDB'])->
name('orders');

