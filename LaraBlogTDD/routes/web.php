<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyBoardController;
use App\Http\Controllers\MyCategoryController;
use App\Http\Controllers\MyCommentController;
use App\Http\Controllers\MyPostController;
use App\Http\Controllers\MyTagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// myboard route
Route::get('/myboard', [MyBoardController::class, 'index'])->name('myboard.index');
// my post route
Route::get('/myboard/myposts', [MyPostController::class, 'index'])->name('myboard.myposts.index');
Route::get('/myboard/myposts/create', [MyPostController::class, 'create'])->name('myboard.myposts.create');
Route::post('/myboard/myposts', [MyPostController::class, 'store'])->name('myboard.myposts.store');
Route::get('/myboard/myposts/{post}/edit', [MyPostController::class, 'edit'])->name('myboard.myposts.edit');
Route::patch('/myboard/myposts/{post}/update', [MyPostController::class, 'update'])->name('myboard.myposts.update');
Route::delete('/myboard/myposts/{post}', [MyPostController::class, 'destroy'])->name('myboard.myposts.destroy');
// my category route
Route::get('/myboard/mycategories', [MyCategoryController::class, 'index'])->name('myboard.mycategories.index');
Route::get('/myboard/mycategories/create', [MyCategoryController::class, 'create'])->name('myboard.mycategories.create');
Route::post('/myboard/mycategories', [MyCategoryController::class, 'store'])->name('myboard.mycategories.store');
Route::get('/myboard/mycategories/{category}/edit', [MyCategoryController::class, 'edit'])->name('myboard.mycategories.edit');
Route::patch('/myboard/mycategories/{category}/update', [MyCategoryController::class, 'update'])->name('myboard.mycategories.update');
Route::delete('/myboard/mycategories/{category}', [MyCategoryController::class, 'destroy'])->name('myboard.mycategories.destroy');
// my tag route
Route::get('/myboard/mytags', [MyTagController::class, 'index'])->name('myboard.mytags.index');
Route::get('/myboard/mytags/create', [MyTagController::class, 'create'])->name('myboard.mytags.create');
Route::post('/myboard/mytags', [MyTagController::class, 'store'])->name('myboard.mytags.store');
Route::get('/myboard/mytags/{tag}/edit', [MyTagController::class, 'edit'])->name('myboard.mytags.edit');
Route::patch('/myboard/mytags/{tag}/update', [MyTagController::class, 'update'])->name('myboard.mytags.update');
Route::delete('/myboard/mytags/{tag}', [MyTagController::class, 'destroy'])->name('myboard.mytags.destroy');
// my comments route
Route::get('/myboard/mycomments', [MyCommentController::class, 'index'])->name('myboard.mycomments.index');
Route::get('/myboard/mycomments/{post}/create', [MyCommentController::class, 'create'])->name('myboard.mycomments.create');
Route::post('/myboard/mycomments', [MyCommentController::class, 'store'])->name('myboard.mycomments.store');
Route::get('/myboard/mycomments/{comment}/edit', [MyCommentController::class, 'edit'])->name('myboard.mycomments.edit');
Route::patch('/myboard/mycomments/{comment}/update', [MyCommentController::class, 'update'])->name('myboard.mycomments.update');
Route::delete('/myboard/mycomments/{comment}', [MyCommentController::class, 'destroy'])->name('myboard.mycomments.destroy');

// post route
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::patch('/posts/{post}/update', [PostController::class, 'update'])->name('posts.update');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// category route
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::patch('/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');
// tag route
Route::get('/tags', [TagController::class, 'index'])->name('tags.index');
Route::get('/tags/{tag}', [TagController::class, 'show'])->name('tags.show');
Route::get('/tags/{tag}/edit', [TagController::class, 'edit'])->name('tags.edit');
Route::patch('/tags/{tag}/update', [TagController::class, 'update'])->name('tags.update');
Route::delete('/tags/{tag}', [TagController::class, 'destroy'])->name('tags.destroy');
// comments route
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::get('/comments/{comment}/edit', [CommentController::class, 'edit'])->name('comments.edit');
Route::patch('/comments/{comment}/update', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');

require __DIR__ . '/auth.php';