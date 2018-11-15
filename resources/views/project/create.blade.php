{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
						<div class="card-body">
								<h2>Create new Project</h2>

										<form action="{{ action('ProjectController@store') }}" method="post">

										@csrf


											<div class="form-group">
												<label for="name">Name</label>
												<input type="text" name="name" class="form-control">
											</div>


											<div class="form-group">
												<button type="submit">Create</button>
											</div>
						</div>
				</div>
			</div>
	</div>
</div>

	

@endsection