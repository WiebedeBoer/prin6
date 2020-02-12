@extends('layouts.app')
@section('title')
Servers
@endsection
@section('content')
<h1>Servers</h1>
<p>Server Registratie</p>
<div class="register">
<form method="POST" action="server" class="pb-3">
<p>Server naam:</p><div class="input-group"><input type="text" name="server_name" value="{{old('server_name')}}"></div>
<div>{{$errors->first('server_name')}}</div>
<p>Server type:</p><div class="input-group"><input type="text" name="server_type" value="{{old('server_type')}}"></div>
<div>{{$errors->first('server_type')}}</div>
<p>Server OTAP:</p><div class="input-group"><input type="text" name="server_otap" value="{{old('server_otap')}}"></div>
<div>{{$errors->first('server_otap')}}</div>
<input type="submit" value="registreer server">
@csrf
</form>
</div>
<p>Servers</p>
<div class="users">
<ul class="nav navbar-nav">
    @foreach($servers as $registered_server)    
        <li class="nav-item">{{ $registered_server->server_name }}</li>  
    @endforeach
</ul>
</div>
@endsection