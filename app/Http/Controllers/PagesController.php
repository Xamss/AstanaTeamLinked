<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{





    public function app(){
        return view('layouts.app');
    }

    /*
     *  Implement proper functions for controllers 'posts' and 'post'
     */
    public function posts(){
        return view('pages.posts');
    }

    public function post(){
        $data = Post::all();
        return view('pages.post')->with($data);
    }
}
