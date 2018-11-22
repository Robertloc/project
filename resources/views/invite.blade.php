@extends('layouts.layout')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md">
              <div class="card">
                  <div class="card-header">
                  <h3>Invite a Collaborator</h3>
                  </div>
                <form action="{{ route('invite') }}" method="post">
                    {{ csrf_field() }}
                <input type="email" name="email" placeholder="e-mail address..."><br>
                    <br><button type="submit">Send invite</button>
                </form>
                <a href="{{ URL::previous() }}" id="edit">Return to previous page</a>
            </div>
        </div>
    </div>

@endsection
