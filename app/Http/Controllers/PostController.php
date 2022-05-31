<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){

        return view('pages.home', ['posts'=> Post::latest()->filter(request(['category']))->paginate(10), 'categories'=>Category::all()]);
    }

    public function show(Post $post){
        return view('pages.post', ['post'=> $post->load('category','user')]);
    }


}
