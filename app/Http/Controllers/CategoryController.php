<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('admin.category.category',['categories'=>Category::all()]);
    }
    public  function save(Request $request){
        Category::saveCategory($request);
        return back();
    }
}
