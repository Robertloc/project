{{-- @extends('layouts.app') --}}
@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-big-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        Logged in as {{ 'username{id}' }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
