@extends('layouts.app')
@section('title')
Gebruikers
@endsection
@section('content')
<h1>Gebruikers</h1>
@if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<p>Gebruikers</p>
<div class="users">
<ul class="nav navbar-nav">
    @foreach($registered_users as $registered_user)    
        <li class="nav-item"><a href="/users/{{ $registered_user->id }}">{{ $registered_user->name }}</a></li>  
    @endforeach
</ul>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
    {{ $registered_users->links() }}
</div>
</div>
@endsection