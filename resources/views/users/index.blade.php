@extends('layouts.app')
@section('title')
Gebruikers
@endsection
@section('content')
<h1>Gebruikers</h1>
<p>Gebruikers</p>
<div class="users">
<ul class="nav navbar-nav">
    @foreach($registered_users as $registered_user)    
        <li class="nav-item"><a href="/users/{{ $registered_user->id }}">{{ $registered_user->name }}</a></li>  
    @endforeach
</ul>
</div>
@endsection