<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Collection;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::with('stocks')->get();
    }


    public function store(StoreProductRequest $request)
    {
        //
    }


    public function show(string $id)
    {
        return Product::with('stocks')->find($id);
    }


    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }


    public function destroy(Product $product)
    {
        //
    }
}
