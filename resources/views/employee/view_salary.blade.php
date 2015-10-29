@extends('layouts.default')

@section('title_page')
	View Salary
@stop

@section('active_home')
class="active"
@stop

@section('content')
	<div class="container">
		<h2>{{$data_emp->first_name}} {{$data_emp->last_name}}</h2>

		<table class="table table-bordered table-hover">
			<thead>
				<tr class="bg-primary">
					<th>Order</th>
					<th>Salary</th>
					<th>From Date</th>
					<th>To Date</th>
				</tr>
			</thead>
			<tbody>
				<?php $num =1; ?>
				@foreach($data_salary as $data)
				<tr>
					<td>{{$num}}</td>
					<td>{{$data->salary}}</td>
					<td>{{$data->from_date}}</td>
					<td>{{$data->to_date}}</td>
				</tr>
				<?php $num++; ?>
				@endforeach
			</tbody>
		</table>
	</div>
@stop