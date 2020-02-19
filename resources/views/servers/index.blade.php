@extends('layouts.app')
@section('title')
Servers
@endsection
@section('content')
<h1>Servers</h1>
<p>Server Registratie</p>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
        </div>
    @endif
<div class="register">
<p><a href="/servers/create">Voeg server toe</a></p>
</div>
<p>Servers</p>
<div class="servers">
<table class="table table-striped">
    <thead>
        <tr>
          <td>Server Details</td>
          <td>Wijzig</td>
          <td>Verwijder</td>
        </tr>
    </thead>
    <tbody>
    @foreach($servers as $registered_server)
        <tr>    
        <td>
        <a href="/servers/{{ $registered_server->server_id }}">{{ $registered_server->server_name }}</a>
        </td> 
        <td>
        <a href="/servers/{{ $registered_server->server_id }}/edit">{{ $registered_server->server_name }}</a>
        </td> 
        <td>
        <form action="/servers/{{ $registered_server->server_id }}" method="post">
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
    {{ $servers->links() }}
</div>
</div>
@endsection