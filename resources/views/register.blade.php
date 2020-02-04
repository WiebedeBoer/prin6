@extends('layout')
@section('title')
Registratie
@endsection
@section('content')
<h1>Registratie</h1>
<p>Registratie</p>
<div class="register">
<form method="POST" action="register" class="pb-3">
<p>Gebruikersnaam:</p><div class="input-group"><input type="text" name="username" value="{{old('username')}}"></div>
<div>{{$errors->first('username')}}</div>
<p>Wachtwoord:</p><div class="input-group"><input type="password" name="password" value="{{old('password')}}"></div>
<div>{{$errors->first('password')}}</div>
<p>E-mail:</p><div class="input-group"><input type="text" name="email" value="{{old('email')}}"></div>
<div>{{$errors->first('email')}}</div>
<input type="submit" value="registreer">
@csrf
</form>
</div>
@endsection