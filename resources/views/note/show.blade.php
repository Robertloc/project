@extends('layouts.app')

@section('content')

  <h1>{{ $note_versions->name }}</h1>

  <p>{{ $note_versions->text }}</p>

@endsection