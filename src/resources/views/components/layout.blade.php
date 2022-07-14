<html>
<head>
    <title>{{ $title }}</title>
    <style>
        .italic {
            font-style: italic;
        }
        .bold {
            font-weight: bold;
        }
        .color-red {
            color: red;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>

    @auth
        <a href="{{ route('logout') }}">Logout</a>
    @else
        <a href="{{ route('login-page') }}">Login</a>
    @endauth

    {{ $slot }}
</body>
</html>
