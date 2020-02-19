@extends('layouts.app')
@section('title')
Servers
@endsection
@section('content')
<h1>Servers</h1>
<p>Server Registratie</p>
<div class="register">
<form method="POST" action="/servers" class="pb-3">
@include('servers.form')
<input type="submit" value="registreer server">
@csrf
</form>
</div>
@endsection