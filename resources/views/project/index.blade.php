{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md">
          <div class="card">
            <h3><a href="{{ action('ProjectController@create')}}">Create project</a></h3>
          </div> 
          <br>
          @foreach($projects as $project)
            <div class="card">
              <a href="{{ action('ProjectController@show', $project->id)}}">{{ $project->name }}</a>
              Created by: {{$project->user->name}}<br>
              <a href="{{ action('ProjectController@destroy', $project->id)}}" onclick="return myFunction()">Delete</a>
              <a href="{{ action('ProjectController@edit', $project->id)}}">Edit</a>
            </div>
            <br>
          @endforeach
        </div>
      </div>
    </div>
  
  <script>
        function myFunction() {
            if(!confirm("Are you sure you want to delete this project?"))
            event.preventDefault();
        }
  </script>
@endsection