@extends('layouts.app')
@section('title')
Applicaties
@endsection
@section('content')
<h1>Applicaties</h1>

<p><a href="/appstatus">App status toevoegen</a></p>

<p>Applicatie Registratie</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<p><a href="/apps/create">Voeg app toe</a></p>
</div>
<p>Apps</p>
<div class="apps">
<table class="table table-striped">
    <thead>
        <tr>
          <td>App Details</td>
          <td>Wijzig</td>
          <td>Verwijder</td>
        </tr>
    </thead>
    <tbody>
    @foreach($apps as $web_app) 
        <tr>   
        <td><a href="/apps/{{ $web_app->app_id }}">{{ $web_app->app_name }}</a></td> 
        <td><a href="/apps/{{ $web_app->app_id }}/edit">{{ $web_app->app_name }}</a></td> 
        <td>
        <form action="/apps/{{ $web_app->app_id }}" method="post">
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
    {{ $apps->links() }}
</div>
</div>
@endsection