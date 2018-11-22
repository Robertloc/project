@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
          <div class="card">
						<div class="card-header">
						<h3>Edit Project Name</h3>
						</div>
							<form action="{{ action('ProjectController@update', $projects->id) }}" method="post">
						 @csrf
								<div class="form-group">
									<input type="text" value="{{ $projects-> name}}" name="name" class="form-control">
								</div>
							<div class="form-group">
									<button type="submit">Submit</button>
							</div>

	<a href="{{ action('ProjectController@index')}}" id="edit">Return to Projects Dashboard</a>

@endsection


