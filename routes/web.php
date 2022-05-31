<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;



Route::view('/welcome', 'pages/welcome');

Route::get('/app', 'App\Http\Controllers\PagesController@app');



Route::get('/posts', [PostController::class, 'index']);



Route::get('/posts/{post:slug}', [PostController::class, 'show']);


Route::get('/profile',[AccountController::class, 'show'])->middleware('auth');

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



Route::get('/messages', function(User $user){
    return view('pages/message');
})->middleware('auth');

Route::view('/authentication', 'pages/authentication');

Route::prefix('guest')->group(function(){
    Route::get('/welcome', [SessionController::class, 'view']);
    Route::post('/welcome', [SessionController::class, 'destroy'])->middleware('auth');
});

Route::prefix('user')->group(function(){
    Route::post('/welcome', [RegisterController::class, 'store'])->middleware('guest');
    Route::get('/welcome', [SessionController::class, 'store']);
});





