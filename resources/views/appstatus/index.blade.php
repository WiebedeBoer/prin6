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
<p><a href="/appstatus/create">Voeg app status toe</a></p>
</div>
<p>App Status</p>
<div class="apps">
<table class="table table-striped">
    <thead>
        <tr>
          <td>App Status Details</td>
          <td>Wijzig</td>
          <td>Verwijder</td>
        </tr>
    </thead>
    <tbody>
    @foreach($appstatus as $web_app) 
        <tr>   
        <td><a href="/appstatus/{{ $web_app->app_status_id }}">{{ $web_app->app_status }}</a></td> 
        <td><a href="/appstatus/{{ $web_app->app_status_id }}/edit">{{ $web_app->app_status }}</a></td> 
        <td>
        <form action="/appstatus/{{ $web_app->app_status_id }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Verwijder</button>
        </form>
        </td> 
        </tr>
    @endforeach
    </tbody>
</table>
</div>
<div class="row">
<div class="col-12 d-flex justify-content-center pt-5">
    {{ $appstatus->links() }}
</div>
</div>
@endsection