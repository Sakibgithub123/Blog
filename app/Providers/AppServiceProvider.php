<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('frontEnd.include.header',function ($view){
            $view->with('categories',Category::where('status',1)->get());
        });

        View::composer('frontEnd.category.categories ',function ($view){
            $view->with('categoriesProduct',Blog::where('category_id',1)->get());
        });
    }
}
