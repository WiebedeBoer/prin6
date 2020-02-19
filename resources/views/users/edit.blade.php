@extends('layouts.app')
@section('title')
Gebruikersprofiel
@endsection
@section('content')
<h1>Gebruikersprofiel</h1>
<p>Gebruikersprofiel</p>
<form method="POST" action="/users/{{$registered_user->id}}" enctype="multipart/form-data" class="pb-3">
@method('PATCH')
<p>Profiel foto:</p>
<div class="input-group">
<label for="image">Profiel Foto</label>
<input type="file" name="image">
</div>
<div>{{$errors->first('image')}}</div>
<input type="submit" value="upload foto">
@csrf
</form>
@endsection