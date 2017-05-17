@extends('app')
@section('content')
<div class="col-md-4 col-md-offset-4">
<form method="POST" action="http://localhost:8888/auth/login" accept-charset="UTF-8">
<input type="hidden" name="_token"         value="{csrf_token()}"/>
	

	
	<div class="form-group">
		<label for="name">Email:</label>
		<input class="form-control" name="name" type="text" id="name">
		</div>
	<div class="form-group">
		<label for="name">Password:</label>
		<input class="form-control" name="name" type="text" id="password">
		</div>
	<input class="btn btn-primary form-control" type="submit" value="登录">
	</form>
	</div>
@stop