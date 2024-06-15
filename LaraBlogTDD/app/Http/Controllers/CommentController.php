<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{    
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }
    
    public function index()
    {
        $comments = Comment::orderBy('created_at', 'desc')->paginate(2);

        return view('comments.index', compact('comments'));
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', [
            'comment' => $comment
        ]);
    }

    public function update(UpdateCommentRequest $request, Comment $comment)
    {
        $comment->update($request->validated());

        return redirect()->route('comments.index', $comment)->with('success', 'Comment updated successfully');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return redirect()->route('comments.index')->with('success', 'Comment deleted successfully');
    }
}
