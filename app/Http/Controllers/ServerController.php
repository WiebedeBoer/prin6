<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servers;

class ServerController extends Controller
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
        return redirect('servers')->with('message', 'Succes');
        
    }

    //create
    public function create()
    {      
        return view('servers.create');        
    }

    //server list
    public function index()
    {       
        $servers = Servers::all();
        return view('servers.index', ['servers' =>$servers,]);        
    }

    //show server
    public function show($server)
    {             
        $server = Servers::where('server_id', $server)->firstOrFail();        
        return view('servers.show', compact('server')); 
    }
    
}