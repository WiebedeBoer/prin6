<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\New_User;

class UserController extends Controller
{
    //
    public function list()
    {       

        $new_users = New_User::all();

        return view('users', ['new_users' =>$new_users,]);
        
    }
}
