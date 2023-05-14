<?php 

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\PurchasingController;
use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Models\Requests;


Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::post('/clientorders', [DashboardController::class, 'list'])->name('clientorders');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/sales', [SalesController::class, 'create'])
    ->name('sales.create')
    ->middleware('auth');

Route::post('/sales', [SalesController::class, 'store'])
    ->name('sales.store')
    ->middleware('auth');

Route::get('/sales/create', [SalesController::class, 'mostrar'])
    ->name('sales.index')
    ->middleware('auth');


Route::get('/purchasing', [PurchasingController::class, 'todo'])
    ->name('purchasing.index')
    ->middleware('auth');

    Route::get('/route', [RouteController::class, 'mostrar'])
    ->name('route.edit')
    ->middleware('auth');
   
    Route::post('update-status', [RouteController::class, 'updateStatus'])
    ->name('update-status');

    
    Route::get('/route/all', [RouteController::class, 'all'])
    ->name('route.index')
    ->middleware('auth');

require __DIR__.'/auth.php';