<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{


    public function handleFileUpload($file,  $path  )
    {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path($path), $fileName);

        return "/$path/" . $fileName;
    }

    public function show()
    {
        return view('admin.create-author');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required' ,
            'bio' => 'required' ,
            'author_image' => 'required' 
        ]) ;


        try {

            $authorImagePath = $this->handleFileUpload($request->file('author_image') ,'images/author') ;

            Author::create([
                'name' => $request->input('name') ,
                'bio' => $request->input('bio') ,
                'image' => $authorImagePath 
            ]) ; 

            return redirect()->route('all-author')->with('success', 'Author Created');

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors("Some error occured ");
        }
    }


    public function updateShow( Author $id)
    {
        $author = $id ;

        return view('admin.create-author',compact('author')) ;

    }

    public function update(Request $request , Author $id)
    {
        $request->validate([
            'name' => 'required' ,
            'bio' => 'required' ,
        ]) ;

        try {


            $updateData = $request->only(['name', 'bio']);


            if ($request->hasFile('author_image')) {

                $authorImagePath = $this->handleFileUpload($request->file('author_image'), 'images/author');

                $updateData['image'] = $authorImagePath;

            }
        
            $id->update($updateData);

            return redirect()->route('all-author')->with('success', 'Author Updated');

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors("Some error occured ");

        }
    }

    public function all_author()
    {
        $authors = Author::all() ;

        return view('admin.all_author',compact('authors')) ;
    }

    public function delete( Author $id )
    {
        $id->delete() ;

        return redirect()->route('all-author')->with('success', 'Author Deleted');


    }



}
