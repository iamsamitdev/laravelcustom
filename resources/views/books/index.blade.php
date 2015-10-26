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
		{!!Session::get('status')!!}
		<p><a href="{{URL::to('book/create')}}" class="btn btn-lg btn-success">Add new book</a></p>
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-primary">
					<th>ID</th>
					<th>ISBN</th>
					<th>Title</th>
					<th>Author</th>
					<th>Publisher</th>
					<th>Cover</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($book as $bk)
				<tr>
					<td>{{$bk->id}}</td>
					<td>{{$bk->isbn}}</td>
					<td>{{$bk->title}}</td>
					<td>{{$bk->author}}</td>
					<td>{{$bk->publisher}}</td>
					<td>{{$bk->image}}</td>
					<td>
						<a href="book/{{$bk->id}}" class="btn btn-sm btn-primary">Read</a>
						<a href="book/{{$bk->id}}/edit" class="btn btn-sm btn-warning">Update</a>

						<form method="POST" action="book/{{$bk->id}}" style="display: inline-block">
							<input name="_method" type="hidden" value="DELETE">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<button class="btn btn-sm btn-danger">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop