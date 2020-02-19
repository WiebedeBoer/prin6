@extends('layouts.app')
@section('title')
App Status Details voor {{ $appstatus->app_status }}
@endsection
@section('content')
<h1>App Status Details</h1>
<p><a href="/appstatus/{{ $appstatus->app_status_id }}/edit">Wijzig {{ $apps->app_status }}</a></p>
<p>App Status Details</p>
<div class="apps">
<ul class="nav navbar-nav">  
        <li class="nav-item">{{ $appstatus->app_status }}</li>
</ul>
</div>
@endsection