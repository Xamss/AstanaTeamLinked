<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('pages.posts', ['posts'=> Post::latest()->with('category', 'user')->get()]);
    }

    public function show(Post $post){
        return view('pages.post', ['post'=> $post->load('category','user')]);
    }
}
