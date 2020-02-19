@extends('layouts.app')
@section('title')
App Details voor {{ $apps->app_name }}
@endsection
@section('content')
<h1>App Details</h1>

<p><a href="/apps/{{ $apps->app_id }}/edit">Wijzig {{ $apps->app_name }}</a></p>

<p>App Details</p>
<div class="apps">
<ul class="nav navbar-nav">   
        <li class="nav-item">{{ $apps->app_name }}</li>
        <li class="nav-item">{{ $apps->app_status }}</li>
        <li class="nav-item">{{ $apps->app_url }}</li>
        <li class="nav-item">{{ $apps->app_remarks }}</li>
</ul>
</div>
@endsection