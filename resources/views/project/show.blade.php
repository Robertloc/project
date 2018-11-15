{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
        <a href="{{ action('ProjectController@create')}}">
          Create project
      </a>
      </div>
  </div>
</div>
@foreach($projects as $project)

  <div>
  <a href="{{ action('NoteController@show')}}">{{ $project->name }}</a>
  </div>
  <a href="{{ action('ProjectController@destroy', $project->id)}}" class="btn btn-default bg-secondary">Delete</a>
  <a href="{{ action('ProjectController@edit', $project->id)}}" class="btn btn-default bg-secondary">Edit</a>


@endforeach

@endsection