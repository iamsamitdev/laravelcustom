@extends('layouts.default')

@section('title_page')
Register
@stop

@section('active_home')
class="active"
@stop


@section('content')
	<div class="jumbotron">
		<div class="container">
			<h1>Register</h1>
		</div>
	</div>

	<div class="container">
		<form action="{{URL::to('register')}}" method="POST" role="form">
			<legend>Register Form</legend>
			
			<!-- <div class="alert alert-danger">
				<ul>	
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div> -->
			
			{!!Session::get('status')!!}
		
			<div class="form-group">
				<label>Fullname:</label>
				<input type="text" name="fullname" class="form-control" value="{{Input::old('fullname')}}">
				{!!$errors->first('fullname','<span class="lable label-danger">:message</span>')!!}
			</div>

			<div class="form-group">
				<label>Email:</label>
				<input type="text" name="email" class="form-control" value="{{Input::old('email')}}">
				{!!$errors->first('email','<span class="lable label-danger">:message</span>')!!}
			</div>

			<div class="form-group">
				<label>Password:</label>
				<input type="password" name="password" value="{{Input::old('password')}}" class="form-control">
				{!!$errors->first('password','<span class="lable label-danger">:message</span>')!!}
			</div>

			<div class="form-group">
				<label>Tel:</label>
				<input type="text" name="tel" value="{{Input::old('tel')}}"  class="form-control">
				{!!$errors->first('tel','<span class="lable label-danger">:message</span>')!!}
			</div>

			<div class="form-group">
				<label>Address:</label>
				<textarea name="address" class="form-control" rows="3">{{Input::old('address')}}</textarea>
				{!!$errors->first('address','<span class="lable label-danger">:message</span>')!!}
			</div>

			<input type="hidden" name="_token" value="{{csrf_token()}}">

			<input type="submit" name="submit" value="Submit" class="btn btn-block btn-primary">
		</form>
	</div>
@stop