<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product as ResourcesProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function get_product($id){
        $product = Product::find($id);
        return response()->json(['product' => new ResourcesProduct($product) ], 200);
    }
}
