@extends('layouts.app')
@section('title')
Server Details voor {{ $server->server_name }}
@endsection
@section('content')
<h1>Servers</h1>
<p>Server Wijziging</p>
<div class="register">
<form method="POST" action="/servers/{{ $server->server_id }}" class="pb-3">
@method('PATCH')
@include('servers.form')
<input type="submit" value="wijzig server">
@csrf
</form>
</div>
@endsection