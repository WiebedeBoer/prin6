<?php

namespace App\Http\Controllers;
use App\App_Status;
use Illuminate\Http\Request;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class AppstatusController extends Controller
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
            'app_status' => 'required|min:2'
        ]);
            
        $appstatus = new App_Status();  
        $appstatus->app_status = request('app_status');
        $appstatus->save();        
         
        //return
        return redirect('/appstatus')->with('message', 'Succesvol ingevoerd');
            
    }

    //create view
    public function create()
    {      
        $appstatus = new App_Status();
        return view('appstatus.create', compact('appstatus'));        
    }

    //update function
    public function update(Request $request, $app__status_id)
    {
        $data = $request->validate([
            'app_status' => 'required|min:2'      
        ]);
        App_Status::where('app_status_id',$app_status_id)->update($data);

        return redirect('/appstatus')->with('message', 'Succesvol gewijzigd');
    }

    //edit view
    public function edit($appstatus)
    {      
        $appstatus = App_Status::where('app_status_id', $appstatus)->firstOrFail();        
        return view('appstatus.edit', compact('appstatus'));       
    }
    
    //apps list
    public function index()
    {       
        //$apps = Apps::all()->paginate(25);
        $appstatus = DB::table('app_status')->paginate(25);
        return view('appstatus.index', ['appstatus' =>$appstatus,]);        
    }
    
    //show app
    public function show($appstatus)
    {             
        $appstatus = App_Status::where('app_id', $appstatus)->firstOrFail();        
        return view('appstatus.show', compact('appstatus')); 
    }

    //delete app function
    public function destroy($id)
    {
        $appstatus = App_Status::findOrFail($id);
        $appstatus->delete();

        return redirect('/appstatus')->with('message', 'Succesvol verwijderd');
    }
}
