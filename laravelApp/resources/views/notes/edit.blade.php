@extends('layout')



@section('title')
Note # {{ $note->id }}
@stop


@section('header')
	<h1>Note # {{ $note->id }}</h1>
@stop


@section('content')
	<h4>Current Note: {{ $note->body }}</h4>
	<h2>Edit Note:</h2>
	<form method='POST' action='/notes/{{ $note->id }}'>
		{{ method_field('PATCH') }}

		<div class='form-group'>
			<textarea name='body' class='form-control'></textarea>
		</div>
		<div class='form-group'>
			<button type='submit' class='btn btn-primary'>Update note</button>
		</div>
		
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
	<br>
	<a href='{{ URL::to("MLS/$note->m_l_s_id") }}' class="btn btn-default">Return to Note Page</a>
                                                                
@stop


@section('footer')

@stop