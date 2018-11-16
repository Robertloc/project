{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
	<h1>Edit note</h1>

	<form action="{{ action('NoteController@update', $note->id) }}" method="post">

	 @csrf



	    <div class="form-group">
			<label for="text">Text</label>
			<input type="text" name="text" class="form-control">
		</div>


		<div class="form-group">
			<button type="submit">Edit Note</button>
		</div>

	

@endsection