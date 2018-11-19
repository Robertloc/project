{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
            <div class="card">
          <a href="{{ action('ProjectController@create')}}">Create project</a>
          @foreach($projects as $project)
          GO TO:<a href="{{ action('ProjectController@show', $project->id)}}">{{ $project->name }}</a>
          <a href="{{ action('ProjectController@destroy', $project->id)}}" class="btn btn-default bg-secondary">Delete</a>
          <a href="{{ action('ProjectController@edit', $project->id)}}" class="btn btn-default bg-secondary">Edit</a>
          Created by: {{$project->user->name}}<br>
          @endforeach
    </div>

@endsection