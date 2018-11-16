@extends('layouts.layout')

@section('content')
<h1>{{$note->name}}</h1>

<h3>{{$note->user->name}}</h3>



@foreach($note->noteversions as $noteversion)

<p>{{$noteversion->text}}</p>
<h3>{{$noteversion->user->name}}</h3>

@endforeach

@endsection