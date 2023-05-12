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

Route::get('/clientsResult', function () {
    return view('clientsResult');
});

Route::get('/login', function () {
    return view('login');
});


Route::get('/sales', function () {
    return view('sales');
});


Route::get('/purchasing', function () {
    return view('purchasing');
});

Route::get('/route', function () {
    return view('route');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
