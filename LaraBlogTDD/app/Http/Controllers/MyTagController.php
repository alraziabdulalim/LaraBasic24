<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTagRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class MyTagController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }
    
    public function index()
    {
        $tags = Tag::orderBy('created_at', 'desc')->paginate(2);

        return view('myboard.mytags.index', compact('tags'));
    }

    public function create()
    {
        return view('myboard.mytags.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ]);

        Tag::create([
            'name' => $request->name,
        ]);

        // return view('tags.index');
        return redirect()->route('myboard.mytags.index')->with('success', 'Tag created successfully');
    }

    public function edit(Tag $tag)
    {
        return view('myboard.mytags.edit', [
            'tag' => $tag
        ]);
    }

    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $tag->update($request->validated());

        return redirect()->route('myboard.mytags.index', $tag)->with('success', 'Tag updated successfully');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('myboard.mytags.index')->with('success', 'Tag deleted successfully');
    }
}
