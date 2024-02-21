<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman home</title>
</head>
<body>
    <h1>Website laravel adani</h1>
    <hr>
    <a href="{{ url ('/')}}">home</a>
    <a href="{{ url ('/abbout') }}">Abbout</a>
    <a href="{{ url ('/contact') }}">Contact</a>
    <hr>
    @yield('content')
</body>
</html>