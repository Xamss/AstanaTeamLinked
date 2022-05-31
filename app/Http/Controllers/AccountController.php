<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function show(){
        return view('pages.profile');
    }

    public function edit(User $user){
        return view('pages.profile.edit', ['user'=>$user]);
    }
}
