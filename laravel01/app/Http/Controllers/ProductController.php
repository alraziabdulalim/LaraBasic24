<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(5);
        return view('products.index', [
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('products.create',);
    }

    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('products.index')->with('success', 'Product created successfully');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', [
            'product' => $product
        ]);
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        // dd($request->all(), $product);

        $product->update($request->validated());
        // $product->update([
        //     'title'=> $request->title,
        //     'price'=> $request->price
        // ]);

        return redirect()->route('products.show', $product)->with('success', 'Product updated successfully');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully');
    }
}
