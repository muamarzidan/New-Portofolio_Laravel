<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>

    <body class="antialiased">

    <x-layout.navbar></x-layout.navbar>

    {{$slot}}
  
    <footer>Footer</footer> 
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>