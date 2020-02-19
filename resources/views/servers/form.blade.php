<p>Server naam:</p><div class="input-group"><input type="text" name="server_name" value="{{old('server_name') ?? $server->server_name}}"></div>
<div>{{$errors->first('server_name')}}</div>
<p>Server type:</p><div class="input-group"><input type="text" name="server_type" value="{{old('server_type') ?? $server->server_type}}"></div>
<div>{{$errors->first('server_type')}}</div>
<p>Server OTAP:</p><div class="input-group"><input type="text" name="server_otap" value="{{old('server_otap') ?? $server->server_otap}}"></div>
<div>{{$errors->first('server_otap')}}</div>