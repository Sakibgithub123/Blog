<?php

namespace App\Http\Controllers;
use App\Models\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author(){
        return view('admin.author.author',['authors'=>Author::all()]);
    }
    public  function save(Request $request){
        Author::saveAuthor($request);
        return back();
    }
}
