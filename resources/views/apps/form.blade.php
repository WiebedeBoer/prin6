<p>App naam:</p><div class="input-group"><input type="text" name="app_name" value="{{ old('app_name') ?? $apps->app_name }}"></div>
<div>{{$errors->first('app_name')}}</div>
<p>App status:</p><div class="input-group">
<select name="app_status">
<optgroup label="status">
@foreach($appstatus as $status_app) 
    <option value="{{ $status_app->app_status_id }}" {{ $status_app->app_status_id ==$apps->app_status ? 'selected' : '' }}>{{ $status_app->app_status }}</option>
@endforeach
</select>
</div>
<div>{{$errors->first('app_status')}}</div>
<p>App url:</p><div class="input-group"><input type="text" name="app_url" value="{{ old('app_url') ?? $apps->app_url }}"></div>
<div>{{$errors->first('app_url')}}</div>
<p>App opmerkingen:</p><div class="input-group">
<textarea id="app_remarks" name="app_remarks" rows="4" cols="50">{{ old('app_url')  ?? $apps->app_remarks }}</textarea>
</div>
<div>{{$errors->first('app_remarks')}}</div>