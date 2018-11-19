@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
			<div class="col-md">
					<div class="card">
							<h3>Notes</h3>

	              <div>
                   <div class="container">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="{{ action('NoteController@create')}}">Create note</a>
                    </div>
                  </div>

        @foreach($noteversions as $noteversion)

          {{ $noteversion->name }}
          {{ $noteversion->text }}

          <a href="{{ action('NoteController@destroy', $noteversion->id)}}">Delete</a>
          <a href="{{ action('NoteController@edit', $noteversion->id)}}">Edit</a>
               </div>
          </div>
      </div>
  </div>
</div>

@endforeach
@endsection 
