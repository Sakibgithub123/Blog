<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $category;
    public static function saveCategory($request)
    {
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
    }
}
