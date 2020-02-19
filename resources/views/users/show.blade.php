@extends('layouts.app')
@section('title')
Gebruiker Details voor {{ $registered_user->name }}
@endsection
@section('content')
<h1>Gebruiker Details</h1>
<p><a href="/users/{{ $registered_user->id }}/edit">Wijzig profiel foto {{ $registered_user->name}}</a></p>
<p>Gebruiker Details</p>
<div class="users">
<ul class="nav navbar-nav">        
    <li class="nav-item">{{ $registered_user->name }}</li> 
    <li class="nav-item">{{ $registered_user->email }}</li>          
</ul>
</div>
@if($registered_user->image)
    <div>
    <img src="{{ asset('storage/'.$registered_user->image) }}" alt="profielfoto" class="img-thumbnail">
    </div>
@endif
@endsection