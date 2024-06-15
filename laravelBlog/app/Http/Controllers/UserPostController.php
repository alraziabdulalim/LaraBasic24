<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function index(Request $request, $user)
    {
        $posts = $request->user()->find($user)->posts()->with('category')->paginate();

        return view('users.posts.index', [
            'posts' => $posts
        ]);
    }
}
