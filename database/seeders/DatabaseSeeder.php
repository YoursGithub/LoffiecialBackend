<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $catIDs = Category::pluck('id')->toArray() ;


        $blog = file_get_contents(__DIR__."/blog.txt");

        $fileName = "/images/thumbnail/Adam-Beachfront-Dubai-Mag.jpg";

        // DB::table('posts')->update([
        //     'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam veniam quo sit nemo quia omnis."
        // ]);
        

        for ( $i = 0 ; $i < 50 ; $i++)
        {
            $random =  rand(10000 , 999999) ;
            $title = "title for post - " . $random ;

            $randomCat = array_rand($catIDs);
            $category = $catIDs[$randomCat];
    


            Posts::create([
                'category_id' => $category,
                'author_id' => 1 ,
                'trending' => 0 , 
                'title' => $title ,
                'slug'  => Str::slug(strtolower($title)),
                'description' => "Description",
                'keywords' =>"keyyy",
                'thumbnail' => $fileName,
                'blog' => $blog,
            ]);
        } 


    }
}
