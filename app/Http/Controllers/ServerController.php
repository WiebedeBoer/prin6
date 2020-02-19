<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;
use App\Support\Collection;
use Illuminate\Support\Facades\DB;

class ServerController extends Controller
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
            'server_name' => 'required|min:3',
            'server_type' => 'required|min:3',
            'server_otap' => 'required|min:3'
        ]);
        
        $server = new Servers();       
        $server->server_name = request('server_name');
        $server->server_type = request('server_type');
        $server->server_otap = request('server_otap');
        $server->save();        
     
        //return back();
        return redirect('/servers')->with('message', 'Succesvol toegevoegd');
        
    }

    //create view
    public function create()
    {      
        $server = new Servers();
        return view('servers.create', compact('server'));        
    }

    //update function
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'server_name' => 'required|min:3',
            'server_type' => 'required|min:3',
            'server_otap' => 'required|min:3'            
        ]);
        Servers::where('server_id', $id)->update($data);

        return redirect('/servers')->with('message', 'Succesvol gewijzigd');
    }

    //edit view
    public function edit($server)
    {      
        $server = Servers::where('server_id', $server)->firstOrFail();        
        return view('servers.edit', compact('server'));       
    }

    //server list
    public function index()
    {       
        //$servers = Servers::all()->paginate(25);
        $servers = DB::table('servers')->paginate(25);
        return view('servers.index', ['servers' =>$servers,]);        
    }

    //show server
    public function show($server)
    {             
        $server = Servers::where('server_id', $server)->firstOrFail();        
        return view('servers.show', compact('server')); 
    }

    //delete server function
    public function destroy($id)
    {
        $server = Servers::findOrFail($id);
        $server->delete();
    
        return redirect('/servers')->with('message', 'Succesvol verwijderd');
    }
    
}