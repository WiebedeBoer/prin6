<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\New_User;

class RegisterController extends Controller
{
    //register
    public function registerUser()
    {
        
        $data = request()->validate([
            'username' => 'required|min:3',
            'password' => 'required|min:6|unique:users',
            'email' => 'required|email'
        ]);
        
        
        
        //dd(request('username'));
        

        
        $newuser = new New_User();
        
        //$newuser = \App\New_User();
        $newuser->username = request('username');
        $newuser->password = request('password');
        $newuser->email = request('email');
        $newuser->save();
        
        
        return back();
        
    }
}
