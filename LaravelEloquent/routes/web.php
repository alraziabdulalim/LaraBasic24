<?php

use App\Models\Category;
use App\Models\Comment;
use App\Models\Mechanic;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $phone = User::find(1);
    $phone = User::find(2)->phone;
    // return $phone;

    $user = Phone::find(1);
    $user = Phone::find(2)->user;
    // return $user;

    $users = User::all();
    $phones = Phone::all();

    $comments = Post::find(1);
    $comments = Post::find(2)->comments;
    // return $comments;

    $post = Comment::find(1);
    $post = Comment::find(2)->post;
    // return $post;

    // $posts = Post::all();
    $posts = Post::with('comments')->get();
    $comments = Comment::all();
    // return $comments;

    // $posts = Post::find(1);
    // $posts = Post::all();
    $posts = Post::with('categories')->get();
    $categories = Category::with('posts')->get();
    $posts = Post::with('tags')->get();
    $tags = Tag::with('posts')->get();
    // return $posts;

    // $mechanics = Mechanic::all();
    $mechanics = Mechanic::with('carOwner')->get();
    // return $mechanics;

    return view('welcome', compact('mechanics'));
});
