<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apps;

class AppsController extends Controller
{
        //authenticate
        public function __construct()
        {
            $this->middleware('auth')->except(['index']);
        }
        
        //register
        public function store()
        {
            
            $data = request()->validate([
                'app_name' => 'required|min:2',
                'app_status' => 'required|min:2',
                'app_url' => 'required|url',
                'app_remarks' => 'required'
            ]);
            
            $apps = new Apps();       
            $apps->app_name = request('app_name');
            $apps->app_status = request('app_status');
            $apps->app_url = request('app_url');
            $apps->app_remarks = request('app_remarks');
            $apps->save();        
         
            //return
            return redirect('apps')->with('message', 'Succes');
            
        }
    
        //create
        public function create()
        {      
            return view('apps.create');        
        }
    
        //server list
        public function index()
        {       
            $apps = Apps::all();
            return view('apps.index', ['apps' =>$apps,]);        
        }
    
        //show server
        public function show($apps)
        {             
            $apps = Apps::where('app_id', $apps)->firstOrFail();        
            return view('apps.show', compact('apps')); 
        }
}
