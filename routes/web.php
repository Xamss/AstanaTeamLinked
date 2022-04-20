<?php

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|

Route:: get('/hello', function(){
    return '<h1>Hello world</h>';
});

Route:: get('/about', function(){
    return view('pages.about');
});

Route:: get('/user/{id}', function($id){
    return 'This is user id '.$id;
});

*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'App\Http\Controllers\PagesController@index');

Route::get('/about', 'App\Http\Controllers\PagesController@about');

Route::get('/services', 'App\Http\Controllers\PagesController@services');

Route::get('/app', 'App\Http\Controllers\PagesController@app');



Route::get('/posts', function(){

    return view('pages.posts', ['posts'=> Post::all()]);

    #TESTING
//    $documents = array_map(function ($file){
//        return YamlFrontMatter::parseFile($file);
//    }, $files);


});



Route::get('/posts/{post}', function($slug){

    return view('pages.post', ['post'=> Post::find($slug)]);
    #TESTING
//    $path = __DIR__."/../resources/posts/{$slug}.html";
//
//    $post = cache()->remember(".post.{$slug}", 10, function() use ($path) {
//        return file_get_contents($path);
//    });
//
//    return view('pages.post',[
//        'post' => $post
//    ]);
})->where('post', '[A-z_\-]+');
