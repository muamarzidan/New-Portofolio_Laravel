<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    </head>

    <body class="antialiased text-gray-800 dark:text-gray-200">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
            <x-layout.navbar></x-layout.navbar>
            {{$slot}}
            <x-layout.footer></x-layout.footer>
        </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    </body>
</html>