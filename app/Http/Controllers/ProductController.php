<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ProductCollection;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return new ProductCollection($products);
    }

    public function show($id)
     {
        $product = Product::find($id);
        return new ProductResource($product);
     }
}
