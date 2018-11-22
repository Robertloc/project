@extends('layouts.layout')

@section('content')
<div class="container">
		<div class="row justify-content-center">
				<div class="col-md-8" id="divContainer">
					@foreach($note->noteversions as $noteversion)
						<div class="card">
							<div class="card-header">
									<h3>{{$note->name}}</h3>
							</div>
							<div class="card-body">
							{{$noteversion->text}} <br>
								<span id="created">Edited by {{$noteversion->user->name}} <br> {{$noteversion->updated_at}}</span><br>
								<a href="{{ URL::previous() }}" id="edit">Return to Project</a>
							</div>
						</div>
					@endforeach
				</div>
		</div>
	</div>
</div>


	
@endsection