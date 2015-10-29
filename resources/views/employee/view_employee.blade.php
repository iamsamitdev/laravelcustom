@extends('layouts.default')

@section('title_page')
	Employee Data
@stop

@section('active_home')
class="active"
@stop

@section('content')

	<div class="jumbotron">
		<div class="container">
			<h1>Employee ({{number_format($count_all)}}) Records</h1>
		</div>
	</div>

	<div class="container">
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-primary">
					<th>Emp NO</th>
					<th>Birth Date</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Gender</th>
					<th>Hiredate</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data_emp as $dbemp)
				<tr>
					<td><a href="{{URL::to('backend/empsalary')}}/{{$dbemp->emp_no}}">{{$dbemp->emp_no}}</a></td>
					<td>{{$dbemp->birth_date}}</td>
					<td>{{$dbemp->first_name}}</td>
					<td>{{$dbemp->last_name}}</td>
					<td>{{$dbemp->gender}}</td>
					<td>{{$dbemp->hire_date}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!!$data_emp->render()!!}
	</div>
@stop