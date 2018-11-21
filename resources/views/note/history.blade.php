@extends('layouts.layout')

@section('content')
<div class="container">
		<div class="row justify-content-center">
				<div class="col-md-8" id="divContainer">
					@foreach($note->noteversions as $noteversion)
						<div class="card">
							<div class="card-body">
								<h3>{{$note->name}}</h3>
								Text: {{$noteversion->text}}<br>
								Last edit by: {{$noteversion->user->name}}<br>
								Updated at: {{$noteversion->updated_at}}<br>
								<a href="{{ URL::previous() }}">Return to Project</a>
							</div>
						</div>
					@endforeach
				</div>
		</div>
	</div>
</div>


	
@endsection