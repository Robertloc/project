@extends('layouts.layout')

@section('content')
<div class="container">
	<div class="row justify-content-center">
			<div class="col-md">
					<div class="card">
            <div class="card-header">
              <h3>Notes</h3>
            </div>

	              <div>
                   <div class="container">
                    <div class="navbar-header">
                      <a class="navbar-brand" href="{{ action('NoteController@create')}}">Create note</a>
                    </div>
                  </div>

        @foreach($noteversions as $noteversion)

          {{ $noteversion->name }}
          {{ $noteversion->text }}

          <a href="{{ action('NoteController@destroy', $noteversion->id)}}">Delete</a>
          <a href="{{ action('NoteController@edit', $noteversion->id)}}">Edit</a>
               </div>
          </div>
      </div>
  </div>
</div>

@endforeach
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
