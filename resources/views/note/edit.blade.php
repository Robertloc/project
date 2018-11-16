{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
	<h1>Edit note</h1>

	<div>
		<a href="{{ URL::previous() }}">Go back to notes</a>
	</div> 
	
	<form action="{{ action('NoteController@update', $note->id) }}" method="post">

	 @csrf

	<div>
		<label for="text">Text</label>
		<input type="text" name="text">
	</div>
	<div>
		<button type="submit">Edit Note</button>
	</div>

@endsection