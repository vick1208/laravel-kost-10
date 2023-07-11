<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    {{-- <link rel="shortcut icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon"> --}}
    @vite('resources/css/app.css')
</head>
<body>
    @include('partials.main')
</body>
</html>