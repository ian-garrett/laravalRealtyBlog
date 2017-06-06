@extends('layout')



@section('title')
{{ $mls->name }}
@stop


@section('header')
	<h1>{{ $mls->name }} ({{ $mls->acronym }})</h1>
@stop


@section('content')
	<h3>MLS Notes:</h3>
	<ul>
	@foreach($mls->notes as $note)
		<li>
		{{ $note->body }}
		||
		{{ $note->user->name }}
		||
		<a href='{{ URL::to("notes/$note->id/edit") }}' class="btn btn-default">Edit this Note</a>
		||
		<a href='{{ URL::to("notes/$note->id/delete") }}' class="btn btn-default">Delete this Note</a>
		</li>
	@endforeach
	</ul>


	<form method='POST' action='/MLS/{{ $mls->id }}/notes'>
		<div class='form-group'>
			<textarea name='body' class='form-control'></textarea>
		</div>
		<div class='form-group'>
			<button type='submit' class='btn btn-primary'>Add note</button>
		</div>
    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
	
	@if (count($errors))
	<h4>Errors</h4>
	<ul>
		@foreach ($errors->all() as $error)
			<li><b>{{ $error }}</b></li>
		@endforeach
	</ul>
	@endif

	<br>
	<a href='{{ URL::to("MLS") }}' class="btn btn-default">Return to MLS Page</a>                                                    
@stop


@section('footer')

@stop