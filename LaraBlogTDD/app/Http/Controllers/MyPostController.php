<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPostController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function index()
    {
        $user = Auth::user();

        $posts = $user->posts()->with('user')->with('category')->latest()->paginate(2);

        return view('myboard.myposts.index', compact('posts'));
    }
 
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('myboard.myposts.create', compact('categories', 'tags'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required',
        ]);

        // $request->user()->posts()->create([
        // $post = Post::create([
        $post = $request->user()->posts()->create([
            'title' => $request->title,
            'content' => $request->content,
            'category_id' => $request->category_id,
        ]);

        $tag_ids = $request->input('tag_ids');
        $post->tags()->attach($tag_ids);

        return redirect()->route('myboard.myposts.index')->with('success', 'Post created successfully');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('myboard.myposts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(UpdatePostRequest $request, Post $post)
    {
        $post->update($request->validated());

        return redirect()->route('myboard.myposts.index')->with('success', 'Post updated successfully');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('myboard.myposts.index')->with('success', 'Post deleted successfully');
    }
}
