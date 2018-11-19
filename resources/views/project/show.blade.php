@extends('layouts.layout')

@section('content')

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md">
      <div>
        <a href="{{ action('ProjectController@index')}}">Go back to projects</a>
      </div> 
      <p>{{ $project->name }}</p>
      <div>
        <p>{{$project->user->name}}</p>
      </div>
      <a href="{{ action('NoteController@create', $project->id)}}">Create note</a>
    </div>
  </div>
</div>


@foreach ($project->notes as $note)


<p>{{$note->name}}</p>

<p>{{$note->noteversions()->orderBy('created_at', 'desc')->first()->text}}</p>

<p>{{$note->user->name}}</p>

<p>{{$note->created_at}}</p>


<div>
  <a href="{{ action('NoteController@destroy', $note->id)}}" class="btn btn-danger btn-sm" onclick="return myFunction()">Delete</a>
</div>

<script>
    function myFunction() {
        if(!confirm("Are You Sure to delete this"))
        event.preventDefault();
    }
</script>

<div>
  <a href="{{ action('NoteController@edit', $note->id)}}" class="btn btn-warning btn-sm">Edit</a>
</div>

<div>
  <a href="{{ action('NoteController@history', $note->id)}}" class="btn btn-dark btn-sm">History</a>
</div>

@endforeach

@endsection

