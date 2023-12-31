<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\typeController;
use App\Http\Controllers\incomingController;
use App\Http\Controllers\productController;
use App\Http\Controllers\outgoingController;
use App\Http\Controllers\sessionController;
use App\Http\Controllers\supplierController;
use App\Http\Controllers\dashboardController;
use App\Models\incoming;
use App\Models\product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [sessionController::class, 'index']);
Route::post('/sesi/login', [sessionController::class, 'login']);
Route::get('/sesi/logout', [sessionController::class, 'logout']);

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');

Route::resource('categories', categoryController::class);
Route::post('category', [categoryController::class, 'import'])->name('category.import');
Route::resource('types', typeController::class);
Route::post('type', [typeController::class, 'import'])->name('type.import');
Route::resource('suppliers', supplierController::class);
Route::post('supplier', [supplierController::class, 'import'])->name('supplier.import');
Route::resource('products', productController::class);
Route::post('product', [productController::class, 'import'])->name('product.import');
Route::resource('incomings', incomingController::class);
Route::post('incoming', [incomingController::class, 'import'])->name('incoming.import');
Route::resource('outgoings', outgoingController::class);
Route::post('outgoing', [outgoingController::class, 'import'])->name('outgoing.import');

