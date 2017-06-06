@extends('layout')


@section('title')
MLS List
@stop


@section('header')

@stop


@section('content')


<h1>Real Estate Board Coverage:</h1>
<h3>DB Generated List:</h3>
@if ($search = Request::get('q'))
<h4>MLSs that contain search term: {{ $search }}</h4>
@endif

<ul>
	@foreach ($mlss as $mls)
		<li>
		<a href='/MLS/{{ $mls->id }}'>
		{{ $mls->name }} ({{ $mls->acronym }})
		</a>
		<br>NOTES:
		<ul>
		@foreach($mls->notes as $note)
			<li>
				{{ $note->body }}
			</li>
		@endforeach
		</ul>
		</li>
	@endforeach



@stop


@section('footer')

@stop