@extends('layouts.app')
@section('title')
Applicaties Status
@endsection
@section('content')
<h1>Applicaties Status</h1>
<p>Applicatie Status Wijziging</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<form method="POST" action="/appstatus/{{ $appstatus->app_status_id }}" class="pb-3">
@method('PATCH')
@include('appstatus.form')
<input type="submit" value="wijzig app status">
@csrf
</form>
</div>
@endsection