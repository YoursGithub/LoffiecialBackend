<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\FirstPost;
use App\Models\Posts;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request)
    {
        return view('pages.home');
    }
    public function search(Request $request)
    {

        $search = $request['search'];

        if (!$search) {

            $posts = Posts::with(['category'])->all();

        } else {

            $posts = Posts::where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%')
                ->with('category')
                ->latest()
                ->get();
        }

        $number = $posts->count();


        return view('pages.search', compact('posts', 'search' ,'number'));
    }

    public function blog($slug)
    {

        $post = Posts::where('slug', $slug)->with('category')->firstOrFail();

        $categoryName = $post->category->category;

        $relatedPosts = Posts::where('category_id', $post->category_id)->where('id', '!=', $post->id)->limit(6)->latest()->get();

        $randomPosts = Posts::with(['category'])->inRandomOrder()->limit(8)->get();

        return view('pages.blog', compact('post',  'categoryName', 'relatedPosts', 'randomPosts'));
    }

    public function category($category)
    {

        $category = strtolower(implode(" ", explode('-', $category)));

        $catExist = Category::where('category', $category)->firstOrFail();

        $posts = Posts::where('category_id', $catExist->id)->latest()->paginate(24);

        // $posts = Posts::where('category_id', $catExist->id)->latest()->get();

        // dd($posts->count());


        return view('pages.category', compact('category', 'posts'));
    }
}
