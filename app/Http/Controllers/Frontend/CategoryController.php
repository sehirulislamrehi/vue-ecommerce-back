<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryCollection;
use App\Http\Resources\ProductCollection;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(){
        $category = Category::all();
        return response()->json(['category' => new CategoryCollection($category)], 200);
    }

    public function category_product($slug){
        $category = Category::where('slug',$slug)->first();
        return response()->json(['product' => new ProductCollection($category->product), 'category' => $category->name ], 200) ;
    }
}
