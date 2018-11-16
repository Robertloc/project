@extends('layouts.layout')

@section('content')

<form action="{{ route('invite') }}" method="post">
    {{ csrf_field() }}
    <input type="email" name="email" />
    <button type="submit">Send invite</button>
</form>

<div>
    <a href="{{ URL::previous() }}">Go back to projects</a>
  </div> 

@endsection
