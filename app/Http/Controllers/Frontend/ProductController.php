<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ResourcesProduct;
use App\Http\Resources\ProductCollection;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function all(){
        $product = Product::orderBy('id', 'desc')->get();
        return response()->json(['product' => new ProductCollection($product) ], 200);
    }

    public function product_detail($slug){
        $product = Product::where('slug', $slug)->first();
        return response()->json(['product' => new ResourcesProduct($product)], 200);
    }
}
