@extends('layouts.app')
@section('title')
Server Details voor {{ $server->server_name }}
@endsection
@section('content')
<h1>Server Details</h1>
<p><a href="/servers/{{ $server->server_id }}/edit">Wijzig {{ $server->server_name }}</a></p>
<p>Server Details</p>
<div class="users">
<ul class="nav navbar-nav">   
        <li class="nav-item">{{ $server->server_name }}</li>
        <li class="nav-item">{{ $server->server_type }}</li>
        <li class="nav-item">{{ $server->server_otap }}</li>
</ul>
</div>
@endsection