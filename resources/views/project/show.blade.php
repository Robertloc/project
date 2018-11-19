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
          <br>  
            @foreach ($project->notes as $note)
            <div class="card"> 
              Note Name: {{$note->name}}</p>
              Text: {{$note->noteversions()->orderBy('created_at', 'desc')->first()->text}}</p>
              Updated at: {{$note->created_at}}</p>
              Updated by: {{$project->user->name}}</p>
              <a href="{{ action('NoteController@destroy', $note->id)}}">Delete</a>
              <a href="{{ action('NoteController@edit', $note->id)}}">Edit</a>
              <a href="{{ action('NoteController@history', $note->id)}}">History</a>
              </div>
              </div>
            <br>
            @endforeach
        </div>
      </div> 
    </div>
@endsection
{{-- 
<script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
</script> --}}