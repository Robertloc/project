{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

<div class="container">
        <a href="{{ action('ProjectController@create')}}">
          Create project
      </a>
</div>
@foreach($projects as $project)

  <div>
  <a href="{{ action('ProjectController@show', $project->id)}}">{{ $project->name }}</a>
  </div>
  <a href="{{ action('ProjectController@destroy', $project->id)}}" class="btn btn-default bg-secondary">Delete</a>
  <a href="{{ action('ProjectController@edit', $project->id)}}" class="btn btn-default bg-secondary">Edit</a>

<p>{{$project->user->name}}</p>

@endforeach

@endsection