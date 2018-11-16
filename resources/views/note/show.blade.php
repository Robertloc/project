{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

{{-- @foreach($projects as $project)

<h1>{{$project->name }}</h1>

@endforeach --}}

<div class="container">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ action('NoteController@create')}}">
          Create note
      </a>
  </div>
</div>
@foreach($noteversions as $noteversion)

  <h1>{{ $noteversion->name }}</h1>

  <p>{{ $noteversion->text }}</p>

  <a href="{{ action('NoteController@destroy', $noteversion->id)}}" class="btn btn-default bg-secondary">Delete</a>
  <a href="{{ action('NoteController@edit', $noteversion->id)}}" class="btn btn-default bg-secondary">Edit</a>


@endforeach
@endsection 
