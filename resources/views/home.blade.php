{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="card-small">
            <h3>Dashboard: Logged In</h3>
    </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
    <div class=
<div class="dashboard">
</div>

@endsection
