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
Route::post('/clientsresult', [DashboardController::class, 'list'])->name('clientsresult');

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


    Route::get('/sales/delete/', [SalesController::class, 'deletee'])
    ->name('sales.delete')
    ->middleware('auth');
    
    Route::delete('/sales/delete', [SalesController::class, 'delete'])
    ->name('sales.delete')
    ->middleware('auth');


    Route::get('/sales/edit', [SalesController::class, 'editt'])
    ->name('sales.edit')
    ->middleware('auth');


    Route::put('update-status', [SalesController::class, 'updateStatus'])
    ->name('update-status');

    
Route::get('/purchasing', [PurchasingController::class, 'todo'])
    ->name('purchasing.index')
    ->middleware('auth');

    Route::get('/purchasing/edit', [PurchasingController::class, 'editt'])
    ->name('purchasing.edit')
    ->middleware('auth');

Route::put('actualizar-estado', [PurchasingController::class,'actualizarEstado'])    
->name('actualizar-estado');



    Route::get('/route', [RouteController::class, 'mostrar'])
    ->name('route.edit')
    ->middleware('auth');
   
    Route::post('update-status', [RouteController::class, 'updateStatus'])
    ->name('update-status');

    
    Route::get('/route/all', [RouteController::class, 'all'])
    ->name('route.index')
    ->middleware('auth');


    Route::get('/warehouse', [WarehouseController::class, 'index'])
    ->name('warehouse.index')
    ->middleware('auth');

    

    Route::get('/warehouse/create', [WarehouseController::class, 'CreateAll'])
    ->name('warehouse.create')
    ->middleware('auth');

    Route::post('/warehouse/create', [WarehouseController::class, 'create'])
    ->name('warehouse.create')
    ->middleware('auth');

    Route::get('/warehouse/show', [WarehouseController::class, 'show'])
    ->name('warehouse.show')
    ->middleware('auth');



require __DIR__.'/auth.php';