<?php

use Illuminate\Support\Facades\Route;

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
