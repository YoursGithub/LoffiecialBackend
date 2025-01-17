<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
use App\Models\FirstPost;
use App\Models\Posts;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->share('allCategory',  Category::with('subcategories')->get());

        view()->share('allAuthor', Author::all());


        view()->share('firstPost', FirstPost::with('post')->find(1)?->post);

        // view()->share('secondPost',FirstPost::with('post')->find(2)?->post ) ;


        view()->share('recentPosts', Posts::with('category')->whereNot('category_id' , 2)->latest()->limit(30)->get());

        view()->share('trendingPosts',  Posts::where('trending', 1)->get());


        view()->share('ranPosts', Posts::with(['category'])->whereNot('category_id' , 2)->inRandomOrder()->limit(1)->get() );

        // view()->share('luxuryPosts', Posts::with('category')->whereHas('category', function ($query) {
        //                                                     $query->where('category', 'luxury');
        //                                                 })
        //                                                 ->latest()
        //                                                 ->limit(5)
        //                                                 ->get());

        view()->share('lifestylePosts', Posts::with('category')->whereHas('category', function ($query) {
            $query->where('category', 'lifestyle');
        })
            ->latest()
            ->limit(2)
            ->get());

        view()->share('fashionPosts', Posts::with('category')->whereHas('category', function ($query) {
            $query->where('category', 'fashion');
        })
            ->latest()
            ->limit(4)
            ->get());

        view()->share('entertainmentPosts', Posts::with('category')->whereHas('category', function ($query) {
            $query->where('category', 'entertainment');
        })
            ->latest()
            ->limit(3)
            ->get());



        view()->share('musicPosts', Posts::with('category')->whereHas('category', function ($query) {
            $query->where('category', 'music');
        })
            ->latest()
            ->limit(10)
            ->get());


        view()->share('beautyPosts', Posts::with('category')->whereHas('category', function ($query) {
            $query->where('category', 'beauty');
        })
            ->latest()
            ->limit(1)
            ->get());
    }
}
