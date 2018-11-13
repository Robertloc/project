{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
	<h1>Edit Project</h1>

	<form action="{{ action('ProjectController@update', $projects->id) }}" method="post">

	 @csrf


		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<button type="submit">Edit Project</button>
		</div>

	

@endsection