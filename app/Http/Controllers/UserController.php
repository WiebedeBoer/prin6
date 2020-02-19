<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registered_User;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

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
        $registered_users = DB::table('users')->paginate(25);     
        return view('users.index', ['registered_users' =>$registered_users,]); 
    }

    //show a user
    public function show($registered_user)
    {     
        $registered_user = Registered_User::where('id', $registered_user)->firstOrFail();        
        return view('users.show', compact('registered_user')); 
    }

    //update function
    public function update(Request $request, $user_id)
    {
        $data = $request->validate([
            'image' => 'file|image|max:5000'         
        ]);        
        
        $registered_user = new Registered_User();
        $this->storeImage($registered_user, $user_id); 
    
        return redirect('/users')->with('message', 'Succesvol gewijzigd');
    }
    
    //edit view
    public function edit($user_id)
    {      
        $registered_user = Registered_User::where('id', $user_id)->firstOrFail();               
        return view('users.edit', compact('registered_user'));       
    }

    //delete user function
    public function destroy($id)
    {
        $registered_user = Registered_User::findOrFail($id);
        $registered_user->delete();
        
        return redirect('/users')->with('message', 'Succesvol verwijderd');
    }

    //image url update
    public function imgupdate($img_data, $user_id)
    {
        Registered_User::where('id',$user_id)->update($img_data); 
    }

    //image upload
    public function storeImage($registered_user, $user_id)
    {
        
        if (request()->has('image')){
            
            $registered_user->update([
                'image' =>request()->image->store('uploads','public'),
                ]);
             
            $this->imgupdate([
                'image' =>request()->image->store('uploads','public'),
            ], $user_id);

        }
    }

}
