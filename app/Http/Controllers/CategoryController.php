<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function index(){
        return view('pages.category.index');
    }

    public function data(Request $request){
        $category = Category::orderBy('id','desc')->get();

        return DataTables::of($category)
        ->rawColumns(['action','image'])
        ->editColumn('image', function(Category $category){
            $url = asset("images/category/".$category->image);
            return "<img src='".$url."' width='50px' />" ;
        })
        ->addColumn('action', function(Category $category){
            return '
            <button type="button" data-content="'.route('category.edit', $category->id).'" data-target="#myModal" class="btn btn-primary" data-toggle="modal">
                    Edit
            </button>
            <button type="button" data-content="'.route('category.delete', $category->id).'" data-target="#myModal" class="btn btn-danger" data-toggle="modal">
                    Delete
            </button>';
        })
        ->make(true);
    }

    public function create(Request $request){

        $request->validate([
            'name' => 'required',
            'image' => 'required',
        ]);

        $category = new Category();

        $category->name = $request->name;
        if($request->image){
            $image = $request->file('image');
            $img = rand(0,100) .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img);
            Image::make($image)->save($location);

            $category->image = $img;
        }

        if( $category->save() ){
            return response()->json(['create'=> $category], 200);
        }
        
    }

    public function edit($id){
        $category = Category::find($id);
        return view('modals.category.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        if($request->image){
            if( File::exists('images/category/'. $category->image) ){
                File::delete('images/category/'. $category->image);
            }
            $image = $request->file('image');
            $img = rand(0,100) .'.'. $image->getClientOriginalExtension();
            $location = public_path('images/category/'. $img);
            Image::make($image)->save($location);

            $category->image = $img;
        }

        if( $category->save() ){
            return response()->json(['update'=> $category], 200);
        }
    }


    public function delete($id){
        $category = Category::find($id);
        return view('modals.category.delete', compact('category'));
    }

    public function do_delete($id){
        $category = Category::find($id);

        if( File::exists('images/category/'. $category->image) ){
            File::delete('images/category/'. $category->image);
        }

        foreach( $category->product as $product ){
            if( File::exists('images/product/'. $product->image) ){
                File::delete('images/product/'. $product->image);
            }
            $product->delete();
        }

        if( $category->delete() ){
            return response()->json(['delete'=> $category], 200);
        }
    }

}
