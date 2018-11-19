@extends('layouts.layout')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
              <div class="card">
                  <h3>Email Address:</h3>
                <form action="{{ route('invite') }}" method="post">
                    {{ csrf_field() }}
                <input type="email" name="email"><br>
                    <br><button type="submit">Send invite</button>
                </form>
                <a href="{{ URL::previous() }}">Return to previous page</a>
            </div>
        </div>
    </div>

@endsection
