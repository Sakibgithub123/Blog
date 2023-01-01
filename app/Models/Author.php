<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    private  static $author;
    public static function saveAuthor($request)
    {
        $author = new Author();
        $author->author_name = $request->author_name;
        $author->save();
    }
}
