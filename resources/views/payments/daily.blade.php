<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Checkout</title>
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
    <meta name="twitter:site" content="@JabaleSports" />
    <meta name="twitter:creator" content="@JabaleSports" />
    <meta name="twitter:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="twitter:description" content="Laravel Vite Starter" />
    <link rel="manifest" href="/manifest.json">
    <link rel="apple-touch-icon" href="/images/icons/icon-192x192.png">
    <link rel="icon" href="/images/icons/icon-192x192.png">
    <link rel="shortcut icon" href="/images/icons/icon-192x192.png">
    <link rel="canonical" href="{{ url()->current() }}" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=Onest&display=swap" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-gray-900">
    @include('layouts.menu')
    <main>
        <!-- Pricing section -->
        <div class="mx-auto bg- mt-16 pt-32 max-w-3xl px-6 sm:mt-32 lg:px-8">

            <form method="POST" action="{{ route('pay') }}"
                class="px-4 pb-36 pt-16 sm:px-6 lg:col-start-1 lg:row-start-1  lg:px-0 lg:pb-16 bg-slate-50 rounded-md shadow-lg">
                @csrf
                <div class="mx-auto max-w-lg lg:max-w-none">

                    <section class="py-6 px-6">
                        <h2 id="contact-info-heading" class="text-lg font-medium text-gray-900">Check out</h2>

                        <div class="mt-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <div class="mt-1">
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" autofocus autocomplete="off" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
                        <div class="mt-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <div class="mt-1">
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                        </div>
                        <div class="mt-6">
                            <x-input-label for="mobile" :value="__('Mobile Number')" />
                            <div class="mt-1">
                                <x-text-input id="mobile" class="block mt-1 w-full" type="text" name="phone"
                                    :value="old('phone')" />
                                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                            </div>
                        </div>
                    </section>





                    <div class="mt-10 border-t border-gray-200 pt-6 sm:flex sm:items-center sm:justify-between">
                        <button type="submit"
                            class="w-full rounded-md border border-transparent bg-amber-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-amber-700 focus:outline-none focus:ring-2 focus:ring-amber-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:ml-6 sm:w-auto">Check
                            out</button>

                    </div>
                </div>
            </form>
        </div>
    </main>
    <x-footer-component />
</body>

</html>
