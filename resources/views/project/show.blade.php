@extends('layouts.layout')

@section('content')

<div class="container">
	<div class="row justify-content-center">
			<div class="col-sm-6">
					<div class="card">
            <div class="card-header">
            <h3>{{ $project->name }}</h3>
            <span id="created">Project owner: {{$project->user->name}}</span>
            </div>
            <a href="{{ action('ProjectController@index')}}" id="edit">Return to Projects Dashboard</a>
            <a href="{{ action('NoteController@create', $project->id)}}" id="edit">Create New Project Note</a>
          </div>
      </div>
    </div>
</div>
          <br>  
          <div id="divContainer">
            @foreach ($project->notes as $note)
            <div class="card" data-id="{{ $note->id }}">
              <div class="card-header">
              <h5>{{$note->name}}</h5>
              </div>
              {{$note->noteversions()->orderBy('created_at', 'desc')->first()->text}}</p>
              {{-- Created at: {{$note->created_at}}</p> --}}
              {{-- Updated by: {{$project->user->name}}</p> --}}
              <div class="card-footer">
                  <div class="row justify-content-center">
                    <a href="{{ action('NoteController@destroy', $note->id)}}" onclick="return myFunction()" id="delete">Delete</a>
                    &bull;
                    <a href="{{ action('NoteController@edit', $note->id)}}" id="edit">Edit</a>
                    &bull;
                    <a href="{{ action('NoteController@history', $note->id)}}"" id="history">History</a>
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
           $.ajax({
             type: 'POST',
             url: 'project/show{id}',
             data: $(this).sortable('serialize'),
            success: function(data) {
               alert(data.success);
             },
             error: function() {
               alert('error...');
             }
           });

				 }
			 }); });
		 });

     function myFunction() {
        if(!confirm("Are you sure you want to delete this note?"))
        event.preventDefault();
    }
</script>

@endsection
