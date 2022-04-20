<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = "Welcome to the backend course";
        return view('pages.index', compact('title'));
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = [
            'title' =>'Services',
            'services' => [
                'Web technologies 1',
                'Web technologies 2',
                'OOP'
            ]
        ];
        return view('pages.services') -> with($data);
    }
    public function app(){
        return view('layouts.app');
    }

    public function posts(){
        return view('pages.posts');
    }

    public function post(){
        return view('pages.post');
    }
}
