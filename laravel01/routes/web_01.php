<?php

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

// Route::get('/about', function () {
//     return view('About Page');
// })->name(name:'about');

Route::get('/posts', function () {
    return view('Posts');
});

// Route::get(url:'/');
// Route::post(url:'/'); //for submit form
// Route::put(url:'/'); //for update all column
// Route::patch(url:'/'); //for update one or single column update
// Route::delete(url:'/'); //for delete
// Route::options(url:'/'); //for ?