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

// Route::get('/posts', function () {
    // return view('Posts');
// });

// Route::get('/posts', function () {
//     return 'posts';
// });

// Route::get('/posts/{id}', function ($id) {
//     return $id;
// });

Route::get('/posts/{id}/comments/{comment}', function ($id, $comment) {
    return $id . ' > ' . $comment;
});