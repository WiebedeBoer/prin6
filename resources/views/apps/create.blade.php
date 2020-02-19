@extends('layouts.app')
@section('title')
Applicaties
@endsection
@section('content')
<h1>Applicaties</h1>
<p>Applicatie Registratie</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<form method="POST" action="/apps" class="pb-3">
@include('apps.form')
<input type="submit" value="registreer app">
@csrf
</form>
</div>
@endsection