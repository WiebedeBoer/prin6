@extends('layout')
@section('title')
Login
@endsection
@section('content')
<h1>Login</h1>
<p>Login</p>
<div class="login">
<form method="POST" action="login">
<p>Gebruikersnaam:</p><input type="text" name="username">
<p>Wachtwoord:</p><input type="password" name="password">
<input type="submit" value="login">
</form>
</div>
@endsection