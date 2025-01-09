<?php

namespace App\Http\Controllers;

use App\Models\FirstPost;
use App\Models\Posts;
use Carbon\Carbon;
use DOMDocument;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route as FacadesRoute;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;



class PostController extends Controller
{
    public function sitemap($slug)
    {

        $url = route('blog' , ['slug'=>$slug])  ;
        
            $xmlFile = public_path('sitemap.xml');


            $dom = new DOMDocument();
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true; 


            if ($dom->load($xmlFile)) {
                
                $urlset = $dom->documentElement;

                $newUrl = $dom->createElement('url');

                $loc = $dom->createElement('loc', $url);
                $newUrl->appendChild($loc);

                $lastmod = $dom->createElement('lastmod', Carbon::now('Asia/Kolkata')->toDateString());
                $newUrl->appendChild($lastmod);

                $urlset->appendChild($newUrl);

                $dom->save($xmlFile);

            } 
            else
            {
                throw new Error("Unable to load sitemap");
            }

    }

 
    public function handleFileUpload($file, $path)
    {
        $fileName = $file->getClientOriginalName();
        $file->move(public_path($path), $fileName);

        return "/$path/" . $fileName;
    }


    public function slug(string $value)
    {
        return Str::slug(strtolower($value));
    }



    public function showPosts()
    {
        $posts = Posts::with('category')->latest()->get();

        
        
 
        return view('admin.all_posts', compact('posts'));
    }


    public function createEditor()
    {

        return view('admin.editor');
    }

    public function createPost(Request $request)
    {

        $request->validate([
            'title' => ['required', 'unique:posts,title'],
            'keywords' => ['required'],
            'thumbnail' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg'],
            'blog' => ['required'],
            'author' => ['required'] ,
            'category' => ['required'],
            'trending' => ['required'] ,
        ]);

        try {


            $thumbnailPath = $this->handleFileUpload($request->file('thumbnail'), 'images/thumbnail');

            $slug = $this->slug($request['title']) ;

            Posts::create([
                'title' => $request['title'],
                'category_id' => $request['category'],
                'slug'  => $slug,
                'description' => $request['description'],
                'keywords' => $request['keywords'],
                'thumbnail' => $thumbnailPath,
                'blog' => $request['blog'] ,
                'image_caption' => $request['image_caption']  ,
                'trending' => $request['trending'] == "true" ? 1 : 0 ,
                'author_id' => $request['author'] ,
            ]);

            $this->sitemap($slug);

            return redirect()->route('posts')->with('success', 'Post Created');

        } catch (\Throwable $th) {

            return redirect()->back()->withErrors("Some error occured ");
        }
    }


    public function updateEditor(Posts $id)
    {
        $post = $id;

        Session::put('post', $post);

        return view('admin.editor', compact('post'));
    }


    public function updatePost(Request $request, string $id)
    {
        $request->validate([

            'title' => ['required'],
            'keywords' => ['required'],
            'blog' => ['required'],
            'author' => ['required'] ,
            'category' => ['required'],
            'trending' => ['required'] ,
        ]);
        try {
     
                $prevPost = Session::get('post');

                $slug = $this->slug($request->input('title'));

                $updateData = [
                    'description' => $request->input('description'),
                    'keywords' => $request->input('keywords'),
                    'blog' => $request->input('blog') ,
                    'category_id' => $request->input('category') ,
                    'trending' => $request->input('trending') == "true" ? 1 : 0 ,
                    'image_caption' => $request->input('image_caption') ,
                    'author_id' => $request->input('author') 
                ];

                if ($prevPost->slug !== $slug) {

                    if (Posts::where('slug', $slug)->exists()) {
                        Session::forget('post');
                        return redirect()->back()->withErrors(['title' => 'Title already exists']);
                    }

                    $updateData['title'] = $request->input('title');
                    $updateData['slug'] = $slug;
                }

                if ($request->hasFile('thumbnail')) {

                    $thumbnailPath = $this->handleFileUpload($request->file('thumbnail'), 'images/thumbnail');

                    $updateData['thumbnail'] = $thumbnailPath;
                }  

                if ($request->hasFile('author_image')) {

                    $authorImagePath = $this->handleFileUpload($request->file('author_image'), 'images/thumbnail/author');

                    $updateData['author_image'] = $authorImagePath;
                }

                Posts::where('id', $prevPost->id)->update($updateData);

                Session::forget('post');

                return redirect()->route('posts')->with('success', 'Post Updated');

            } catch (\Throwable $th) {

                return redirect()->back()->withErrors("Some error occured ");

            }

    }


    public function deletePost(Posts $id)
    {
        $id->delete();

        return redirect()->route('posts')->with('success', 'Post Moved to Trash');
    }

    public function trashPosts()
    {  
        
        $trashedPosts =  Posts::onlyTrashed()->get() ;

        return  view('admin.all_trash_posts',compact('trashedPosts')) ;
    }

    public function deleteTrashPosts( $id)
    {  
      $post = Posts::withTrashed()->findOrFail($id);

        $post->forceDelete(); // Delete the post

        return redirect()->route('trash-posts')->with('success', 'Post Deleted ');
    
    
    }

    public function restoreTrashPosts( $id)
    {  
      $post = Posts::withTrashed()->findOrFail($id);

      $post->restore(); // Restore the post

      return redirect()->route('trash-posts')->with('success', 'Post Restored ');

    }


    public function makeFirstPost(Posts $id)
    {
        FirstPost::updateOrCreate(
            ['id' => 1], // Match based on id
            ['post_id' => $id->id] // Update post_id if record exists or create a new one
        );
        
        return redirect()->route('posts')->with('success', 'Made it  first post');

    }



    public function makeSecondPost(Posts $id)
    {
        FirstPost::updateOrCreate(
            ['id' => 2], // Match based on id
            ['post_id' => $id->id] // Update post_id if record exists or create a new one
        );
        
        return redirect()->route('posts')->with('success', 'Made it  second post');

    }


    public function imageUpload(Request $request)
    {
        if ($request->hasFile('upload')) {
            try {
                $file = $request->file('upload');

                $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)
                    . '_' . time() . '.' . $file->getClientOriginalExtension();

                $file->move(public_path('images/posts'), $fileName);

                $url = "/images/posts/" . $fileName;

                return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
            } catch (\Throwable $th) {

                return response()->json(['success' => false, 'message' => 'Image uploading error.'], 500);
            }
        }
    }


    public function imageRemove(Request $request)
    {
        $imageUrl = $request->input('url');

        if (!$imageUrl) return;

        $imagePath = parse_url($imageUrl, PHP_URL_PATH);
        $filePath = public_path('') . $imagePath;

        if (file_exists($filePath) && unlink($filePath)) {
            return response()->json(['success' => true, 'message' => 'Image deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Image deletion failed.']);
        }
    }


}
