<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apps;
use App\App_Status;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class AppsController extends Controller
{
        //authenticate
        public function __construct()
        {
            $this->middleware('auth')->except(['index']);
        }
        
        //store function
        public function store()
        {
            
            $data = request()->validate([
                'app_name' => 'required|min:2',
                'app_status' => 'required',
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
            return redirect('/apps')->with('message', 'Succesvol ingevoerd');
            
        }

        //create view
        public function create()
        {      
            $apps = new Apps();
            $appstatus = App_Status::all();
            return view('apps.create', compact('apps','appstatus'));        
        }

        //update function
        public function update(Request $request, $app_id)
        {
            $data = $request->validate([
                'app_name' => 'required|min:2',
                'app_status' => 'required',
                'app_url' => 'required|url',
                'app_remarks' => 'required'         
            ]);
            Apps::where('app_id',$app_id)->update($data);

            return redirect('/apps')->with('message', 'Succesvol gewijzigd');
        }

        //edit view
        public function edit($apps)
        {      
            $apps = Apps::where('app_id', $apps)->firstOrFail(); 
            $appstatus = App_Status::all();       
            return view('apps.edit', compact('apps','appstatus'));       
        }
    
        //apps list
        public function index()
        {       
            $apps = DB::table('apps')->paginate(25);
            return view('apps.index', ['apps' =>$apps,]);        
        }
    
        //show app
        public function show($apps)
        {             
            $apps = Apps::where('app_id', $apps)->firstOrFail();        
            return view('apps.show', compact('apps')); 
        }

        //delete app function
        public function destroy($id)
        {
            $apps = Apps::findOrFail($id);
            $apps->delete();

            return redirect('/apps')->with('message', 'Succesvol verwijderd');
        }
}
