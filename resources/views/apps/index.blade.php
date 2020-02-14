@extends('layouts.app')
@section('title')
Applicaties
@endsection
@section('content')
<h1>Applicaties</h1>
<p>Applicatie Registratie</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<form method="POST" action="apps" class="pb-3">
<p>App naam:</p><div class="input-group"><input type="text" name="app_name" value="{{old('app_name')}}"></div>
<div>{{$errors->first('app_name')}}</div>
<p>App status:</p><div class="input-group">
<select name="app_status">
<optgroup label="status">
<option value="active">active</option>
<option value="phased_out">phased out</option>
<option value="in preparation">in preparation</option>
<option value="unknown">unknown</option>
</select>
</div>
<div>{{$errors->first('app_status')}}</div>
<p>App url:</p><div class="input-group"><input type="text" name="app_url" value="{{old('app_url')}}"></div>
<div>{{$errors->first('app_url')}}</div>
<p>App opmerkingen:</p><div class="input-group">
<textarea id="app_remarks" name="app_remarks" rows="4" cols="50">{{old('app_remarks')}}</textarea>
</div>
<div>{{$errors->first('app_remarks')}}</div>
<input type="submit" value="registreer app">
@csrf
</form>
</div>
<p>Apps</p>
<div class="apps">
<ul class="nav navbar-nav">
    @foreach($apps as $web_app)    
        <li class="nav-item"><a href="/apps/{{ $web_app->app_id }}">{{ $web_app->app_name }}</a></li>  
    @endforeach
</ul>
</div>
@endsection