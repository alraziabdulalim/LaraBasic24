<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyBoardController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function index()
    {
        return view('myboard.index');
    }

    public function myposts()
    {
        $user = Auth::user();

        $posts = $user->posts()->with('user')->with('category')->latest()->paginate(2);

        return view('myboard.posts', compact('posts'));
    }

    public function categories()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(2);

        return view('myboard.categories', compact('categories'));
    }

    public function tags()
    {
        $tags = Tag::orderBy('created_at', 'desc')->paginate(2);

        return view('myboard.tags', compact('tags'));
    }

    public function comments()
    {
        $comments = Comment::orderBy('created_at', 'desc')->paginate(2);

        return view('myboard.comments', compact('comments'));
    }
}
