<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //register
    public function registerUser()
    {
        
        $data = request()->validate(){[
            'username' => 'required|min:3',
            'password' => 'required|min:6',
            'email' => 'required|email'
        ]};
        
        dd(request('username'));

        
        $user = new UserTest();
        $user->username = request('username');
        $user->password = request('password');
        $user->email = request('email');
        $user->save();
        
        return back();
        
    }
}
