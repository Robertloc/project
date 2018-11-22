{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">
					<h3>Create New Project</h3>
				</div>
				<div class="card-body">
					<form action="{{ action('ProjectController@store') }}" method="post">
					@csrf
					<div class="form-group">
						{{-- <label for="name">Name</label> --}}
						<input type="text" name="name" class="form-control" placeholder="Project name...">
					</div>
					<div class="form-group">
						<button type="submit">Submit</button><br>
					</div>
					<a href="{{ URL::previous() }}" id="edit">Return to Projects</a>
	      </div>
			</div>
		</div>
  </div>
</div>
	
@endsection

