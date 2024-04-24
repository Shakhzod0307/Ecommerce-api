<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {
        return response(['categories'=>Category::all()]);
    }


    public function store(StoreCategoryRequest $request)
    {
        //
    }


    public function show(Category $category)
    {
        return response([
            'category'=>$category
        ]);
    }


    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }


    public function destroy(Category $category)
    {
        Category::destroy($category);
        return response([
            'result'=>'Product deleted successfully!'
        ]);
    }
}
