<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(){
        return view('pages.product.index');
    }

    public function data(Request $request){
        $products = Product::orderBy('id','desc')->get();
        return DataTables::of($products)
        ->rawColumns(['action','category','image'])
        ->editColumn('category', function(Product $product){
            return  $product->category->name;
        })
        ->editColumn('image', function(Product $product){
            $url = asset('images/product/'. $product->image);
            return "<img src='".$url."' width='50px' />";
        })
        ->editColumn('regular_price', function(Product $product){
            return $product->regular_price . ' BDT';
        })
        ->editColumn('offer_price', function(Product $product){
            if( $product->offer_price ){
                return $product->offer_price . ' BDT';
            }
            else{
                return 'No offer price available';
            }
        })
        ->editColumn('action', function(Product $product){
            return '
            <button type="button" data-content="'.route('product.edit', $product->id).'"  data-target="#myModal" class="btn btn-primary" data-toggle="modal">
                    Edit
            </button>
            <button type="button" data-content="'.route('product.delete', $product->id).'"  data-target="#myModal" class="btn btn-danger" data-toggle="modal">
                    Delete
            </button>';
        })
        ->make(true);
    }

    public function create(Request $request){
        $request->validate([
            'name' => 'required|unique:products,name,',
            'description' => 'required',
            'regular_price' => 'required',
            'category_id' => 'required',
            'image' => 'required',
        ]);
        $product = new Product();

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->offer_price = $request->offer_price;
        $product->category_id = $request->category_id;

        if( $request->image ){
            $image = $request->file('image');
            $img = rand(0,100) .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/product/'. $img);
            Image::make($image)->save($location);

            $product->image = $img;
        }

        if( $product->save() ){
            return response()->json(['create' => $product], 200);
        }
    }


    public function edit($id){
        $product = Product::find($id);
        return view('modals.product.edit', compact('product'));
    }


    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required|unique:products,name,'.$id,
            'description' => 'required',
            'regular_price' => 'required',
            'category_id' => 'required',
        ]);

        $product = Product::find($id);

        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->description = $request->description;
        $product->regular_price = $request->regular_price;
        $product->offer_price = $request->offer_price;
        $product->category_id = $request->category_id;

        if( $request->image ){
            if( File::exists('images/product/'. $product->image) ){
                File::delete('images/product/'. $product->image);
            }

            $image = $request->file('image');
            $img = rand(0,100) .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/product/'. $img);
            Image::make($image)->save($location);

            $product->image = $img;
        }

        if( $product->save() ){
            return response()->json(['update' => $product], 200);
        }
    }

    
    public function delete($id){
        $product = Product::find($id);
        return view('modals.product.delete', compact('product'));
    }

    public function do_delete($id){
        $product = Product::find($id);

        if( File::exists('images/product/'. $product->image) ){
            File::delete('images/product/'. $product->image);
        }

        if( $product->delete() ){
            return response()->json(['delete' => $product], 200);
        }
    }
}
