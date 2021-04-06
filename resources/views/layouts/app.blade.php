<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flowers</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-200">
<nav class="p-6 bg-white flex mb-6">
    <ul class="flex items-center">
        <li>
            <a href="{{ route('flower') }}" class="p-3">Add Flower</a>
        </li>
    </ul>
</nav>
@yield('content')
</body>
</html>
