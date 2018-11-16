{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
			<div class="col-md">
					<div class="card">
							<h3>Edit note</h3>

<<<<<<< HEAD
	<div>
		<a href="{{ URL::previous() }}">Go back to notes</a>
	</div> 
	
	<form action="{{ action('NoteController@update', $note->id) }}" method="post">
=======
										<form action="{{ action('NoteController@update', $note->id) }}" method="post">
>>>>>>> resetfunction

										@csrf

<<<<<<< HEAD
	<div>
		<label for="text">Text</label>
		<input type="text" name="text">
	</div>
	<div>
		<button type="submit">Edit Note</button>
	</div>
=======


												<div class="form-group">
												<label for="text">Text</label>
												<input type="text" name="text" class="form-control">
											</div>


											<div class="form-group">
												<button type="submit">Edit Note</button>
											</div>
					</div>
			</div>
	</div>
</div>
>>>>>>> resetfunction

@endsection