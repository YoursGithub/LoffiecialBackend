<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {

//     $hashed =  bcrypt('123') ;

// User::create([
//         'name' => 'admin',
//         'email' => 'admin@gmail.com',
//         'password' => $hashed 
//     ]);

// })->name('admin');




// Route::view('/', 'pages.home');
// Route::view('/blog', 'pages.blog');
// Route::view('/cat', 'pages.category');
// Route::view('/search', 'pages.search');



Route::view('/contacts', 'pages.contact');
Route::view('/privacy', 'pages.privacy');

Route::get('/',[PageController::class, 'home'])->name('home'); 

Route::get('/category/{category}',[PageController::class, 'category'])->name('category'); 
 
Route::get('/blog/{slug}', [PageController::class, 'blog'])->name('blog');

Route::get('/search', [PageController::class, 'search'])->name('search');









Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/login', [LoginController::class, 'loginForm'])->name('login');



Route::prefix('auth')->middleware('auth')->group(function () {
    
    Route::get('/', function () {

         return view('admin.dashboard');
    
    })->name('admin.index');



    Route::get('/logout',[LoginController::class, 'logout'] )->name('logout');



    Route::controller(PostController::class)->group( function(){

        Route::post('/image/upload', 'imageUpload')->name('imageUpload');
        Route::post('/image/remove', 'imageRemove')->name('imageRemove') ;

        Route::get('/make-first-post/{id}' , 'makeFirstPost')->name('first_post') ;
        Route::get('/make-second-post/{id}' , 'makeSecondPost')->name('second_post') ;



        Route::get('/create-post','createEditor')->name('create-post');
        Route::post('/create-post', 'createPost')->name('create-post');

    
        Route::get('/update-post/{id}','updateEditor')->name('update-post');
        Route::post('/update-post/{id}','updatePost')->name('update-post');

    
        Route::get('/delete-post/{id}', 'deletePost')->name('delete-post');




        Route::get('/trash-posts', 'trashPosts' )->name('trash-posts');
        Route::get('/delete-trash-posts/{id}', 'deleteTrashPosts' )->name('delete-trash-posts');
        Route::get('/restore-trash-posts/{id}', 'restoreTrashPosts' )->name('restore-trash-posts');


    
        Route::get('/all-posts','showPosts')->name('posts');
    
    });



    Route::controller(CategoryController::class)->group( function(){ 

        Route::get('/create-category',  'show')->name('create-category');
        Route::post('/create-category',  'create')->name('create-category');

        Route::get('/update-category/{id}',  'updateShow')->name('update-category');
        Route::post('/update-category/{id}',  'update')->name('update-category');


        Route::get('/delete-category/{id}',  'delete')->name('delete-category');


        Route::get('/all-category' ,  'all_category')->name('all-category');

        Route::get('/sub-category',  'viewSubCategory')->name('sub-category');
        Route::post('/sub-category' ,'subCategory')->name('sub-category') ;

    });

    Route::controller(AuthorController::class)->group( function(){

        Route::get('/create-author',  'show')->name('create-author');
        Route::post('/create-author',  'create')->name('create-author');

        
        Route::get('/update-author/{id}',  'updateShow')->name('update-author');
        Route::post('/update-author/{id}',  'update')->name('update-author');


        Route::get('/delete-author/{id}',  'delete')->name('delete-author');


        Route::get('/all-author' ,  'all_author')->name('all-author');

    }) ;



});





