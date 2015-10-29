@extends('layouts.default')

@section('title_page')
Book Store
@stop

@section('active_home')
class="active"
@stop

@section('content')

	<div class="jumbotron">
		<div class="container">
			<h1>Book Store</h1>
		</div>
	</div>	

	<div class="container">
		<div class="showresult"></div>
	</div>
@stop

@section('script')
	<script>
		$(function(){
			App.init();
			App.doShowBook();
		});
	</script>
@stop