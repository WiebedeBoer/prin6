<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registered_User;

class UserController extends Controller
{
    //authenticate
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }
    
    //index show all users
    public function index()
    {     
        $registered_users = Registered_User::all();        
        return view('users.index', ['registered_users' =>$registered_users,]); 
    }

    //show a user
    public function show($registered_user)
    {     
        $registered_user = Registered_User::where('id', $registered_user)->firstOrFail();        
        return view('users.show', compact('registered_user')); 
    }
}
