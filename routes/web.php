<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;



Route::get('/', function () {
    return view('welcome');
});


Route::get('/app', 'App\Http\Controllers\PagesController@app');



Route::get('/posts', function(){

    return view('pages.posts', ['posts'=> Post::latest()->with('category', 'user')->get()]);

});



Route::get('/posts/{post:slug}', function(Post $post){

    return view('pages.post', ['post'=> $post->load('category','user')]);

});


Route::get('/profile', function (){
    return view('pages/profile');
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('pages/posts',
        ['posts'=>$category->posts->load(['category', 'user'])]
    );
});

Route::get('/users/{user}', function(User $user){
    return view('pages/posts',
        ['posts'=>$user->posts->load(['category', 'user'])]
    );
});

Route::get('/home', function(User $user){
    return view('pages/home');
});

Route::get('/authentication', function(User $user){
    return view('pages/authentication');
});

Route::get('/message', function(User $user){
    return view('pages/message');
});


