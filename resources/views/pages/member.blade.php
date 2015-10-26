@extends('layouts.default')

@section('title_page')
Show Member
@stop

@section('active_home')
class="active"
@stop


@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Member Data ({{count($member)}})</h1>
		</div>
	</div>

	<div class="container">
		<table class="table table-bordered">
			<thead>
				<tr class="bg-primary">
					<th>ID</th>
					<th>Fullname</th>
					<th>Email</th>
					<th>Tel</th>
					<th>Address</th>
				</tr>
			</thead>
			<tbody>
				@foreach($member as $mb)
					<tr>
						<td>{{$mb->id}}</td>
						<td>{{$mb->fullname}}</td>
						<td>{{$mb->email}}</td>
						<td>{{$mb->tel}}</td>
						<td>{{$mb->address}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop