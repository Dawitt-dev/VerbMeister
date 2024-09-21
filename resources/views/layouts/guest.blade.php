<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VerbMeister - {{ ucfirst(Route::currentRouteName()) }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased">
    <!-- Navigation Bar -->
    @include('layouts.navigation')

    <div class="flex justify-center items-center min-h-screen">
        <div class="w-full max-w-md px-6 py-4 bg-white shadow-md overflow-hidden rounded-lg">
            <div class="text-center mb-6">
                <video autoplay muted loop playsinline class="mx-auto w-full max-w-xs">
                    <source src="{{ asset('videos/verbmeister.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            @yield('content')
        </div>
    </div>
</body>
</html>

