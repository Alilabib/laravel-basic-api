<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Resources\ProductResource;
class ProductController extends Controller
{
    //

    public function index()
    {
        $products = Product::with('category')->get();

        return ProductResource::collection($products);
    }
}
