{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row justify-content-center">
      <h3><a href="{{ action('ProjectController@create')}}">Create project</a></h3>
        <div class="col-sm-6">
          <div id="divContainer">
          @foreach($projects as $project)
            <div class="card">
            <div class="card-header">
              <h5><a href="{{ action('ProjectController@show', $project->id)}}">{{ $project->name }}</a></h5>
            </div>
              <div class="card-body">
              <div class="container">
                <div class="row justify-content-space-between">
                  <a href="{{ action('ProjectController@destroy', $project->id)}}" onclick="return myFunction()" id="delete">Delete</a>
                  &bull;
                  <a href="{{ action('ProjectController@edit', $project->id)}}" id="edit">Edit</a><br>
                  <span id="created">Created by: {{$project->user->name}}</span>
                </div>
            </div>
          </div>
        </div>
          @endforeach
        </div>
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

           $.ajax({
            method: 'get',
            url: "index.blade.php",
            success: function(data, status) {
              let id = data.data.channel.item;

                id.forEach(function(id) {

                    document.getElementById('divContainer').append(id);
                });
    }
});
				 }
			 }); });
		 });

     function myFunction() {
        if(!confirm("Are you sure you want to delete this note?"))
        event.preventDefault();
    }
</script>

@endsection