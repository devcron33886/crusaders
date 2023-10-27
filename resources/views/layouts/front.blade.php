<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="description" content="Laravel Vite Starter" />
    <meta name="keywords" content="laravel, vite, starter" />
    <meta name="author" content="Laravel Vite Starter" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="/images/icons/icon-192x192.png" />
    <meta property="og:description" content="Laravel Vite Starter" />
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@laravelvite" />
    <meta name="twitter:creator" content="@laravelvite" />
    <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="twitter:description" content="Laravel Vite Starter" />
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Onest&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-gray-900">
    <div class="min-h-secreen">
        @include('layouts.menu')
        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>