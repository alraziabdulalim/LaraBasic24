<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', [ProductController::class, 'index'])->name(name:'products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name(name:'products.create');

Route::post('/products', [ProductController::class, 'store'])->name(name:'products.store');

Route::get('/products/{product}', [ProductController::class, 'show'])->name(name:'products.show');

Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name(name:'products.edit');

Route::patch('/products/{product}/update', [ProductController::class, 'update'])->name(name:'products.update');

Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name(name:'products.destroy');