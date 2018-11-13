<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Collaborate: Task Management</title>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="/home"><i class="fas fa-home"></i>Home</a>
        <a href="/about"><i class="fas fa-question"></i>About/FAQ</a>
        @guest
            <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i>Login</a>
            <a href="{{ route('register') }}"><i class="fas fa-door-open"></i>Register</a>
            <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>Invite</a>
        @else
            <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>Invite</a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>Logout</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </nav>

    @yield('content')
  
</body>
</html>