<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registered_User;

class UserController extends Controller
{
    //
    public function show()
    {     
        $registered_users = Registered_User::all();        
        return view('users', ['registered_users' =>$registered_users,]); 
    }
}
