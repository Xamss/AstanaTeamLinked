<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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



Route::get('/posts', [PostController::class, 'index']);



Route::get('/posts/{post:slug}', [PostController::class, 'show']);


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



Route::get('/message', function(User $user){
    return view('pages/message');
});


Route::get('/authentication', [RegisterController::class, 'create'])->middleware('guest');

Route::post('/authentication', [RegisterController::class, 'store'])->middleware('auth');


Route::post('/posts', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/posts', [SessionController::class, 'store'])->middleware('guest');
