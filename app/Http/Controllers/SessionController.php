<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

function view_user()
{
    return view('/pages/welcome');
}

function view_guest(){
    return view('/pages/welcome');
}
class SessionController extends Controller
{
    public function view(){
        if(Auth::check()){
            return redirect('user/welcome');
        }
        return view_guest();
    }

    public function store(){
        if(!Auth::check()){
            return redirect('guest/welcome');
        }
        if(!request()->has('_token')){
            return view_user();
        }
        if(!Auth::check()){
            $attributes = request()->validate([
                'email'=>'required|email',
                'password'=>'required'
            ]);

            if(auth()->attempt($attributes)){
                return view_user();
            }
        }
    }

    public function destroy(){
        auth()->logout();
        return view_guest();
    }
}
