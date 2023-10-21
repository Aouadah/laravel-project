<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'title' => 'required|max:50|unique:products,title',
            'creators' => 'required|max:55',
            'year_of_release' => 'required|max:4||min:4',
            'genre' => 'required|max:55',
            'description' => 'required|max:55',
        ]);

        //create the product
        Product::create($attributes);

        //return to the homepage
        return redirect(route('product.index'));
    }

    public function edit(Product $product)
    {
        return view('products.edit', ['product' => $product]);
    }

    public function update(Product $product, Request $request)
    {
        $attributes = request()->validate([
            'title' => 'required|max:50|unique:products,title',
            'creators' => 'required|max:55',
            'year_of_release' => 'required|max:4||min:4',
            'genre' => 'required|max:55',
            'description' => 'required|max:55',
        ]);

        $product->update($attributes);

        return redirect(route('product.index'));
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('product.index'));
    }
}
