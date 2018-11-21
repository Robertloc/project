@extends('layouts.layout')

@section('content')

<div class="container">
	<div class="row justify-content-center">
			<div class="col-md-8">
					<div class="card">
            <h3>{{ $project->name }}</h3>
            Project owner: {{$project->user->name}}
            <a href="{{ action('ProjectController@index')}}">Return to Projects Dashboard</a>
            <a href="{{ action('NoteController@create', $project->id)}}">Create New Project Note</a>
          </div>
      </div>
    </div>
</div>
          <br>  
          <div id="divContainer">
            @foreach ($project->notes as $note)
            <div class="card" data-id="{{ $note->id }}">
              Name: {{$note->name}}</p>
              Text: {{$note->noteversions()->orderBy('created_at', 'desc')->first()->text}}</p>
              {{-- Created at: {{$note->created_at}}</p> --}}
              {{-- Updated by: {{$project->user->name}}</p> --}}
              <div class="container">
                  <div class="row justify-content-center">
                    <a href="{{ action('NoteController@destroy', $note->id)}}" onclick="return myFunction()">Delete</a>
                    &bull;
                    <a href="{{ action('NoteController@edit', $note->id)}}">Edit</a>
                    &bull;
                    <a href="{{ action('NoteController@history', $note->id)}}">History</a>
                  </div>
              </div>
            </div>
            @endforeach
          </div>

@endsection

@section('bottom_scripts')
	@parent

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
		$(document).ready(function() {
			 $(function() { $('#divContainer').sortable({
				 update: function(event, ui) {
					 let children = document.getElementById('divContainer').children;
           let order = [];
           for (i =0; i<children.length; i++)
           {
             let id = $(children[i]).data('id');
             order.push(id);
           }
           //ajax
				 }
			 }); });
		 });

     function myFunction() {
        if(!confirm("Are you sure you want to delete this note?"))
        event.preventDefault();
    }
</script>

@endsection
