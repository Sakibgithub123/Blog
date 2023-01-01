<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogUser;
use App\Models\User;
use Illuminate\Http\Request;
use DB;
use Session;
use function Symfony\Component\Console\Style\table;

class ZenBlogController extends Controller
{
    public function index(){
        $blog=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->select('blogs.*','categories.category_name')
            ->where('blogs.status',1)
            ->where('blog_type','popular')
            ->get();


        return view('frontEnd.home.home',['blogs'=>$blog]);
    }
    public function blogDetails($slug){
        $blog=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('slug',$slug)
            ->first();

        $catId=$blog->category_id;

        $categoriesWiseBlogs=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('blogs.category_id',$catId)
            ->get();

        return view('frontEnd.blog.blog-details',[
            'blog'=>$blog ,
            'categoriesWiseBlogs'=>$categoriesWiseBlogs
        ]);
    }
    public function aboutPage(){
        return view('frontend.about.about');
    }
    public function categories($categoriesProduct){

        $blog=DB::table('blogs')
            ->join('categories','blogs.category_id','categories.id')
            ->join('authors','blogs.author_id','authors.id')
            ->select('blogs.*','categories.category_name','authors.author_name')
            ->where('blogs.category_id',$categoriesProduct)
            ->get();
        return view('frontEnd.category.categories',['blogs'=>$blog]);
    }
    public function contactPage(){
        return view('frontEnd.contact.contact');
    }

    public function userRegister(){
        return view('frontEnd.user.user-register');
    }
    public function saveRegister(Request $request){
        BlogUser::userRegister($request);
        return back();

    }
    public function userLogin(){
        return view('frontEnd.user.user-login');
    }
    public function CheckLogin(Request $request){
        $userInfo=BlogUser::where('email','=',$request->userName)
            ->orWhere('phone','=',$request->userName)
            ->first();
        if($userInfo){
            $ex=$userInfo->password;
            if(password_verify($request->password,$ex)){
                Session::put('userId',$userInfo->id);
                Session::put('userName',$userInfo->name);
                return redirect('/');
            }else{
                return back()->with('message','password not match');
            }
        }else{
            return back()->with('message','phone or email not match');
            }

    }
    public function userLogout(){
        Session::forget('userId');
        Session::forget('userName');
        return back();
    }

}
