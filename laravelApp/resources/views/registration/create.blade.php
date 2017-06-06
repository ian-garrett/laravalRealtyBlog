@extends('layouts.default')

@section('content')
	<h1>Register!</h1>

	@if($errors->any())
	<ul class='alert alert-danger'>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif

	{{ Form::open(['route' => 'register_path']) }}

	<!-- Username Form Input -->
	<div class='form-group'>
		{{ Form::label('name', 'Username:') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
	</div>

	<!-- Email Form Input -->
	<div class='form-group'>
		{{ Form::label('email', 'Email:') }}
		{{ Form::text('email', null, ['class' => 'form-control']) }}
	</div>

	<!-- Password Form Input -->
	<div class='form-group'>
		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password', null, ['class' => 'form-control']) }}
	</div>

	<!-- Password Confirmation Form Input -->
	<div class='form-group'>
		{{ Form::label('password_confirmation', 'Password Confirmation:') }}
		{{ Form::password('password_confirmation', null, ['class' => 'form-control']) }}
	</div>

	<div class="form-group">
		{{ Form::submit('Sign Up', ['class' => 'btn btn-primary']) }}
	</div>


	{{ Form::close() }}



@stop