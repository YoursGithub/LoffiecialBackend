<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show( Request $request) 
    {

        return view('admin.create-category');
        
    }
  

    public function create( Request $request)
    {
        $request->validate([
            'category' => 'required ',
            'headline' => 'required',
        ]);

        $exist = Category::where('category', $request->category)->first();
        
        if( $exist ) return redirect()->back()->withErrors("Category already exists");

        try {
            Category::create([
                'category' => $request->category,
                'headline' => $request->headline === 'true' ? true : false,
            ]);
            return redirect()->route('all-category')->with('success', 'Category Created');


        } catch (\Throwable $th) {

            return back()->with('error', 'Something went wrong');
        }
    }

    public function updateShow( Request $request , Category $id)  
    {
        $category = $id ;
        return view('admin.create-category' , compact('category'));
        
    }

    public function update (Request $request , Category $id)
    {

        $request->validate([
            'category' => 'required ',
            'headline' => 'required',
        ]);

        if( $request->category == $id->category){

            $id->update([
                'headline' => $request->headline === 'true' ? true : false 
            ]);
            return redirect()->route('all-category')->with('success', 'Category Updated');

        }
        else{

            $exist = Category::where('category', $request->category)->first();

            if( $exist )  return redirect()->back()->withErrors("Category already exists");

            $id->update([
                'category' => $request->category,
                'headline' => $request->headline === 'true' ? true : false
            ]);
            return redirect()->route('all-category')->with('success', 'Category Updated');

        }
    }

    public function delete(Category $id)
    {
        $id->delete();

        return redirect()->route('all-category')->with('success', 'Category Deleted');
    }

    public function all_category()  
    {
    
        return view('admin.all_category');
    }


    public function viewSubCategory(Request $request)
    {
        return view('admin.sub-category');

    }

    public function subCategory(Request $request)
    {
               $request->validate([
            'sub-category' => 'required ',
            'parent-category' => 'required '
        ]); 

        try {

 
                $exist = Category::where('category', $request['sub-category'])->first();
                
                if( $exist ) return redirect()->back()->withErrors("Category already exists");

                Category::create([
                    'category' => $request['sub-category'],
                    'parent_id' => $request['parent-category']
                ]);


                return redirect()->route('all-category')->with('success', 'Category Created');
                   
            } catch (\Throwable $th) {

            return back()->with('error', 'Something went wrong');

                   
            }       
    }
}
