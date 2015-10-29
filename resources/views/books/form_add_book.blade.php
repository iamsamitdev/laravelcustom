@extends('layouts.default')

@section('title_page')
Add new Store
@stop

@section('active_home')
class="active"
@stop

@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Add new book</h1>
		</div>
	</div>

	<div class="container">
		<form id="add_book" method="POST" role="form">
			<legend>Form title</legend>

			<div class="showresult"></div>
		
			<div class="form-group">
				<label>ISBN</label>
				<input type="text" name="isbn" class="form-control">
			</div>
		
			<div class="form-group">
				<label>Title</label>
				<input type="text" name="title" class="form-control">
			</div>

			<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control">
			</div>

			<div class="form-group">
				<label>Publisher</label>
				<input type="text" name="publisher" class="form-control">
			</div>

			<div class="form-group">
				<label>Cover</label>
				<input type="file" name="image" class="form-control">
			</div>

			<input type="hidden" name="_token" value="{{csrf_token()}}">
		
			<button type="submit" id="submit" class="btn btn-block btn-primary">Submit</button><br><br>
		</form>
	</div>

@stop

@section('script')
	<script>
		$(function(){
			App.init();
			App.doBookCreate();
		});
	</script>
@stop