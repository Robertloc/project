{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
	<div class="container">
			<div class="row justify-content-center">
					<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h3>create new note</h3>
								</div>
									<div class="card-body">
											<form action="{{ action('NoteController@store', $project->id) }}" method="post">
										
											 @csrf
											<div class="form-group">
												<input type="text" name="name" class="form-control" placeholder="Name...">
											</div>
												<div class="form-group">
												<textarea cols="100" rows="10" type="textarea" name="text" class="form-control" placeholder="Details..."></textarea>
											</div>
											<div class="form-group">
												<button type="submit">Create</button>
											</div>
											<a href="{{ URL::previous() }}" id="edit">Return to Project</a>
									</div>
							</div>
					</div>
				</div>



@endsection