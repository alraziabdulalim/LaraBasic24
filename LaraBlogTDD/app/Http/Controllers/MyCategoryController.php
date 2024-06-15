<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class MyCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->only(['store']);
    }

    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(2);

        return view('myboard.mycategories.index', compact('categories'));
    }

    public function create()
    {
        return view('myboard.mycategories.create');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
        ],[
            'name.required' => 'Please fill it up!'
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        // return view('categories.index');
        return redirect()->route('myboard.mycategories.index')->with('success', 'Category created successfully');
    }

    public function edit(Category $category)
    {
        return view('myboard.mycategories.edit', [
            'category' => $category
        ]);
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $category->update($request->validated());

        return redirect()->route('myboard.mycategories.index', $category)->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('myboard.mycategories.index')->with('success', 'Category deleted successfully');
    }
}
