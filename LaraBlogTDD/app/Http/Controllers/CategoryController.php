<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(2);

        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        $posts = $category->posts;

        return view('categories.show', compact('category','posts'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', [
            'category' => $category
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('categories.index', $category)->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
