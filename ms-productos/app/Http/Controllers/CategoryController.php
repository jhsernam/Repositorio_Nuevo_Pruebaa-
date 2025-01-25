<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);

        return Category::create($request->all());
    }

    public function show(string $id)
    {
        return Category::findOrFail($id);
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name' => 'required'
        ]);

        $category->update($request->all());

        return $category;
    }


    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return $category;
    }

    

}
