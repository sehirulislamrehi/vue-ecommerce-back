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
        ->editColumn('image', function(){
            
        })
        ->addColumn('action', function(){
            return '
            <button type="button"  data-target="#editModal" class="btn btn-primary" data-toggle="modal">
                    Edit
            </button>
            <button type="button" data-target="#editModal" class="btn btn-danger" data-toggle="modal">
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

            $category->image = $request->image;
        }

        if( $category->save() ){
            return response()->json(['create'=> $category], 200);
        }
        
    }
}
