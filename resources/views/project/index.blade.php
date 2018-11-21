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
          <div id="divContainer">
          @foreach($projects as $project)
            <div class="card">
              <a href="{{ action('ProjectController@show', $project->id)}}">{{ $project->name }}</a>
              Created by: {{$project->user->name}}<br>
              <div class="container">
                <div class="row justify-content-space-between">
                  <a href="{{ action('ProjectController@destroy', $project->id)}}" onclick="return myFunction()">Delete</a>
                  &bull;
                  <a href="{{ action('ProjectController@edit', $project->id)}}">Edit</a>
              </div>
            </div>
          </div>
            <br>
          @endforeach
        </div>
      </div>
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
           //ajax
				 }
			 }); });
		 });

     function myFunction() {
        if(!confirm("Are you sure you want to delete this note?"))
        event.preventDefault();
    }
</script>

@endsection