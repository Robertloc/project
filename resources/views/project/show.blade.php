@extends('layouts.layout')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md">


  <div>
  <a href="{{ action('NoteController@show')}}">{{ $project->name }}</a>
  </div>
  <a href="{{ action('ProjectController@destroy', $project->id)}}" class="btn btn-default bg-secondary">Delete</a>
  <a href="{{ action('ProjectController@edit', $project->id)}}" class="btn btn-default bg-secondary">Edit</a>

<p>{{$project->user->name}}</p>

<a href="{{ action('NoteController@create', $project->id)}}">Create note</a>

</div>
</div>
</div>


@foreach ($project->notes as $note)


<p>{{$note->name}}</p>

<p>{{$note->noteversions()->orderBy('created_at', 'desc')->first()->text}}</p>

<p>{{$note->user->name}}</p>

<a href="{{ action('NoteController@destroy', $note->id)}}" class="btn btn-default bg-secondary">Delete</a>
<a href="{{ action('NoteController@edit', $note->id)}}" class="btn btn-default bg-secondary">Edit</a>

@endforeach




@endsection