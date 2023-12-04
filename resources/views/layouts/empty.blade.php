<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@hasSection('title')@yield('title') - @endif {{ config('app.name', 'Laravel') }}</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Minimal layout for our Vue app -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-black h-screen antialiased leading-none">
    <div id="app">
        @yield('content')
    </div>
    
    @yield('script')
</body>
</html>