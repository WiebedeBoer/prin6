@extends('layouts.app')
@section('title')
Gebruiker Details voor {{ $registered_user->name }}
@endsection
@section('content')
<h1>Gebruiker Details</h1>
<p>Gebruiker Details</p>
<div class="users">
<ul class="nav navbar-nav">        
    <li class="nav-item">{{ $registered_user->name }}</li> 
    <li class="nav-item">{{ $registered_user->email }}</li>          
</ul>
</div>
@endsection