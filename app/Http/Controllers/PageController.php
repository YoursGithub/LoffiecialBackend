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
    public function search(Request $request ,$search)
    {

            $posts = Posts::where('title', 'like', '%' . $search . '%')
                        ->orWhere('description', 'like', '%' . $search . '%')
                        ->with('category')
                        ->latest()
                        ->get();


            return view('pages.search',compact('posts' , 'search'));
    
    }

    public function blog($slug)
    {
       
        $post = Posts::where('slug', $slug)->with('category')->firstOrFail();

        $categoryName = $post->category->category ; 

        $relatedPosts= Posts::where('category_id' , $post->category_id )->where('id' , '!=' , $post->id )->limit(6)->latest()->get()  ;

        $randomPosts = Posts::with(['category'])->inRandomOrder()->limit(6)->get();

        return view('pages.blog',compact('post' ,  'categoryName' ,'relatedPosts' ,'randomPosts'));
    }
    
    public function category($category)
    {

        $category = strtolower( implode(" ", explode('-', $category) ));

        $catExist = Category::where('category' , $category)->firstOrFail() ;

        $posts = Posts::where('category_id',$catExist->id)->latest()->paginate(11);

        return view('pages.category' , compact('category'  , 'posts'));
        
    }

}