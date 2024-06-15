<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function index()
    {
        $posts = Post::with('user')->with('category')->latest()->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'type' => 'required',
            'category_id' => 'required',
            'pub_status' => 'required',
            'com_status' => 'required',
        ]);

        $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'pub_status' => $request->pub_status,
            'com_status' => $request->com_status,
        ]);

        // $request->posts()->tags()->create([
        //     'tag_id' => $request->tag_id,
        // ]);

        return back();
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function destroy(Post $post)
    {
        $this->authorize('delete', $post);
        $post->delete();

        return back();
    }
}
