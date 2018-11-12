@extends('layouts.app')

@section('content')
	<h1>Create new Project</h1>

	<form action="{{ action('ProjectController@store') }}" method="post">

	 @csrf


		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" class="form-control">
		</div>


		<div class="form-group">
			<button type="submit">Create Project</button>
		</div>

	

@endsection