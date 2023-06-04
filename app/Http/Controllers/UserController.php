<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $count = User::where('isAdmin', 0)->count();
        return view('home', compact('count'));
    }
    public function show(){
        $users = User::where('isAdmin', 0)->get();
        return view('/usersList', compact('users'));

    }
    public function showAdmins(){
        $admins = User::where('isAdmin', 1)->get();
        return view('/adminsList', compact('admins'));
    }

    public function showUser($id){
        $user = User::find($id);
        return view('/userInfo', compact('user'));
    }
}
