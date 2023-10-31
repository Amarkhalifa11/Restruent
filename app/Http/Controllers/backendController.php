<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;


use Illuminate\Http\Request;

class backendController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }


    public function all_user(){
        $users = User::all();
        return view('backend.users.all_users' , compact('users'));
    }
}
