{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

<div class="container">
  <a href="{{ action('ProjectController@create')}}">Create project</a>
</div>

@foreach($projects as $project)
<div>
  <p>GO TO:</p><a href="{{ action('ProjectController@show', $project->id)}}">{{ $project->name }}</a>
</div>
  <a href="{{ action('ProjectController@destroy', $project->id)}}" class="btn btn-default bg-secondary" onclick="return confirm('Are you sure?')" >Delete</a>
  <a href="{{ action('ProjectController@edit', $project->id)}}" class="btn btn-default bg-secondary">Edit</a>
  
<div>
  <p>Created by:</p>
  <p>{{$project->user->name}}</p>
</div>

@endforeach

@endsection