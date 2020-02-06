<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list()
    {
        
        /*
        $new_users = ['Johannes','Wiebe',];
        return view('users', ['new_users'=>$new_users,]);
        */

        
        $new_users = \App\New_User::all();

        //$new_users = New_User::all();

        //dd($new_users);

        return view('users', ['new_users' =>$new_users,]);
        
    }
}
