<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function store(){
        $attributes = request()->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->attempt($attributes)){
            return redirect('posts');
        }


    }

    public function destroy(){
        auth()->logout();

        return redirect('/posts');
    }
}
