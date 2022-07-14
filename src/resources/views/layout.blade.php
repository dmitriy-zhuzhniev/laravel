<html>
<head>
    <title>@yield('title')</title>
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
<div>
    <a href="{{ route('login-form') }}">Login</a>
</div>
<h1>@yield('title')</h1>

@yield('content')
</body>
</html>
