<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(){
        $users = User::where('isAdmin', 0)->get();
        return view('/usersList', compact('users'));

    }

    public function showUser($id){
        $user = User::find($id);
        return view('/userInfo', compact('user'));
    }
}
