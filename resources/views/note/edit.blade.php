{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md">
			<div class="card">
				<h3>Edit note</h3>
				<div>
	        <a href="{{ URL::previous() }}">Go back to notes</a>
				</div> 
				<form action="{{ action('NoteController@update', $note->id) }}" method="post">
	        @csrf
	        <div class="form-group">
	          <label for="text">Text</label>
	          <textarea cols="100" rows="100" type="text" name="text" class="form-control">
								@foreach($note->noteversions as $noteversion)

								<p>{{$noteversion->text}}</p>
							
								@endforeach

						</textarea>
	        </div>
	          <div class="form-group">
	            <button type="submit">Edit Note</button>
						</div>
				</div>
	    </div>
	  </div>
	</div>
</div>

@endsection

