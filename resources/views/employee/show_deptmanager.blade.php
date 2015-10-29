@extends('layouts.default')

@section('title_page')
	Deptmanager Data
@stop

@section('active_home')
class="active"
@stop

@section('content')

	<div class="jumbotron">
		<div class="container">
			<h1>Deptmanager</h1>
		</div>
	</div>

	<div class="container">
		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-primary">
					<th>Dept NO</th>
					<th>Fisrtname</th>
					<th>Lastname</th>
					<th>Gender</th>
					<th>From Date</th>
					<th>To Date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($dept_emp as $deptem)
				<tr>
					<td>{{$deptem->dept_no}}</td>
					<td>{{$deptem->deptmanger_employee->first_name}}</td>
					<td>{{$deptem->deptmanger_employee->last_name}}</td>
					<td>{{$deptem->deptmanger_employee->gender}}</td>
					<td>{{$deptem->from_date}}</td>
					<td>{{$deptem->to_date}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop