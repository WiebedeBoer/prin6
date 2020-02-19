@extends('layouts.app')
@section('title')
Applicaties
@endsection
@section('content')
<h1>Applicaties</h1>
<p>Applicatie Wijziging</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<form method="POST" action="/apps/{{ $apps->app_id }}" class="pb-3">
@method('PATCH')
@include('apps.form')
<input type="submit" value="wijzig app">
@csrf
</form>
</div>
@endsection