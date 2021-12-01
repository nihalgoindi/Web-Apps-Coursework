<!DOCTYPE html>
<html lang="en">
<head>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Swansea Zoo - @yield('title')</title>
</head>
<body>
    <h1>Swansea Zoo - @yield('title')</h1>

    @if ($errors->any())
    <div>
        Errors:

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>     
            @endforeach
        </ul>
    </div>
@endif

    <div>
        @yield('content')
    </div>

    <div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
</form>
    </div>
</body>
</html>
