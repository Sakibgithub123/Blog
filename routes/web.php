<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ZenBlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[ZenBlogController::class,'index'])->name('home');
Route::get('blog-details/{slug}',[ZenBlogController::class,'blogDetails'])->name('blog.details');
Route::get('blog-category/{categoriesProduct}',[ZenBlogController::class,'categories'])->name('blog.category');
Route::get('about',[ZenBlogController::class,'aboutPage'])->name('about');
Route::get('contact',[ZenBlogController::class,'contactPage'])->name('contact');
Route::get('user-register',[ZenBlogController::class,'userRegister'])->name('user.register');
Route::post('user-register',[ZenBlogController::class,'saveRegister'])->name('user.register');
Route::get('user-login',[ZenBlogController::class,'userLogin'])->name('user.login');
Route::post('user-login',[ZenBlogController::class,'CheckLogin'])->name('user.login');
Route::get('user-logout',[ZenBlogController::class,'userLogout'])->name('user.logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/category',[CategoryController::class,'category'])->name('category');
    Route::post('/add-category',[CategoryController::class,'save'])->name('add.category');
    Route::get('/author',[AuthorController::class,'author'])->name('author');
    Route::post('/add-author',[AuthorController::class,'save'])->name('add.author');
    Route::get('/blog',[BlogController::class,'blog'])->name('blog');
    Route::post('/add-blog',[BlogController::class,'saveBlog'])->name('add.blog');
    Route::get('/manage-blog',[BlogController::class,'manageblog'])->name('manage.blog');
    Route::get('/status/{id}',[BlogController::class,'status'])->name('status');
});
