@extends('app')
@section('content')
<div class="container">
<h1>撰写新文章</h1>
	<form method="POST" action="http://localhost:8888/articles" accept-charset="UTF-8">
	<input type="hidden" name="_token"         value="{{csrf_token()}}"/>
		<div class="form-group">
		<label for="name">Title</label>
		<input class="form-control" name="title" type="text" id="name">
		</div>
	
		<div class="form-group">
			<label for="name">Content:</label>
			<textarea class="form-control" name="content" cols="50" rows="10" id="content"></textarea>
		</div>

	 	<div class="form-group">
			<label for="name">Published_at:</label>
			<input class="form-control" name="published_at" type="date" value="Y-m-d" id="published_at">
		</div>
		
	
	<input class="btn btn-primary form-control" type="submit" value="发表文章">
	</form>
	</div>
	@include('errors.list')

@stop