<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categories()
    {
        return response()->json(Category::get(), 201);
    }
    public function category($id)
    {
        return response()->json(Category::find($id), 200);
    }
    public function create(Request $request)
    {
        $category = Category::create($request->all());
        return response()->json($category, 201);
    }
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        return response()->json($category, 200);
    }
    public function delete(Request $request, Category $category)
    {
        $category->delete();
        return response()->json($category, 204);
    }
}
