@extends('layouts.app')
@section('title')
Applicaties Status
@endsection
@section('content')
<h1>Applicaties Status</h1>
<p>Applicatie Status Aanmaak</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<form method="POST" action="/appstatus" class="pb-3">
@include('appstatus.form')
<input type="submit" value="app status aanmaken">
@csrf
</form>
</div>
@endsection