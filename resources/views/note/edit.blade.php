{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card">
				<div class="card-header">
				<h3>Edit note</h3>
				</div>
				<form action="{{ action('NoteController@update', $note->id) }}" method="post">
	        @csrf
	        <div class="form-group">
	          <textarea cols="100" rows="15" type="text" name="text" class="form-control">
								@foreach($note->noteversions as $noteversion)

								{{$noteversion->text}}
							
								@endforeach

						</textarea>
	        </div>
	          <div class="form-group">
							<button type="submit">Submit</button><br>
						</div>
						<a href="{{ URL::previous() }}" id="edit">Return to Notes</a>
				</div>
	    </div>
	  </div>
	</div>
</div>

@endsection

