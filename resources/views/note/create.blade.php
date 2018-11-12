{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
	<h1>Create new note</h1>

	<form action="{{ action('NoteController@store') }}" method="post">

	 @csrf


		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>


	    <div class="form-group">
			<label for="text">Text</label>
			<input type="text" name="text" class="form-control">
		</div>


		<div class="form-group">
			<button type="submit">Create Note</button>
		</div>

	</form>

@endsection