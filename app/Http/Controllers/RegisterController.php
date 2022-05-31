<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function store(){

        $attributes = request()->validate([
            'first_name'=>'required|max:255|min:3',
            'email'=>'required|email',
            'password'=>'required|min:7|max:255'
        ]);

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/user/welcome');
    }
}
