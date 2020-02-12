@extends('layouts.app')
@section('title')
Servers
@endsection
@section('content')
<h1>Servers</h1>
<p>Server Registratie</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<form method="POST" action="servers" class="pb-3">
<p>App naam:</p><div class="input-group"><input type="text" name="server_name" value="{{old('app_name')}}"></div>
<div>{{$errors->first('app_name')}}</div>
<p>App Server:</p><div class="input-group"><input type="text" name="server_type" value="{{old('app_server')}}"></div>
<div>{{$errors->first('server_app')}}</div>
<p>App Software:</p><div class="input-group"><input type="text" name="server_otap" value="{{old('app_software')}}"></div>
<div>{{$errors->first('app_software')}}</div>
<input type="submit" value="registreer server">
@csrf
</form>
</div>
<p>Apps</p>
<div class="users">
<ul class="nav navbar-nav">
    @foreach($apps as $web_app)    
        <li class="nav-item"><a href="/servers/{{ $web_app->app_id }}">{{ $wep_app->app_name }}</a></li>  
    @endforeach
</ul>
</div>
@endsection