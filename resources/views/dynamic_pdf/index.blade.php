@extends('layouts.app')
@section('title')
Server Data
@endsection
@section('content')
<h1>Server Data</h1>
<p><a href="/dynamic_pdf/pdf">Load PDF</a></p>
<div class="servers">
<table class="table table-striped">
    <thead>
        <tr>
          <th>Server Naam</th>
          <th>Server Type</th>
          <th>Server OTAP</th>
        </tr>
    </thead>
    <tbody>
    @foreach($data as $server_data)
        <tr>    
        <td>
       {{ $server_data->server_name }}
        </td> 
        <td>
        {{ $server_data->server_type }}
        </td> 
        <td>
        {{ $server_data->server_otap }}
        </td> 
        </tr>  
    @endforeach
    </tbody>
</table>
</div>
@endsection