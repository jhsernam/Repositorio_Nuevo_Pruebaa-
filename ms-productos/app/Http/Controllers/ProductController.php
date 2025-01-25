<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ]);

        return Product::create($request->all());
    }

    public function show(string $id)
    {
        return Product::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category_id' => 'required'
        ]);

        $product->update($request->all());

        return $product;
    }

    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return $product;
    }
}
