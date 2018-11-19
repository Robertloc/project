@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
          <div class="card">
						<h3>Edit Project Name</h3>
							<form action="{{ action('ProjectController@update', $projects->id) }}" method="post">
						 @csrf
								<div class="form-group">
									<label for="name">New Project Name:</label>
									<input type="text" value="{{ $projects-> name}}" name="name" class="form-control">
								</div>
							<div class="form-group">
									<button type="submit">Submit</button>
							</div>

	<a href="{{ action('ProjectController@index')}}">Return to Projects Dashboard</a>

@endsection