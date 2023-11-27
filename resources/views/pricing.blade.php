<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Pricing</title>
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
        <div class="mx-auto bg- mt-16 pt-32 max-w-7xl px-6 sm:mt-32 lg:px-8">
            <div class="mx-auto max-w-4xl text-center">
                <h1 class="text-base font-semibold leading-7 text-white">Pricing</h1>
                <p class="mt-2 text-4xl font-bold tracking-tight text-gray-100 sm:text-5xl">Pricing plans for teams
                    of&nbsp;all&nbsp;sizes</p>
            </div>
            <p class="mx-auto mt-6 max-w-2xl text-center text-lg leading-8 text-gray-200">Choose an affordable plan
                that’s packed with the best features for engaging your audience, creating customer loyalty, and driving
                sales.</p>

            <div
                class="isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 md:max-w-2xl md:grid-cols-2 lg:max-w-4xl xl:mx-0 xl:max-w-none xl:grid-cols-3">
                <div class="rounded-3xl p-8 ring-1 ring-gray-200">
                    <h2 id="tier-hobby" class="text-lg font-semibold leading-8 text-white">Daily</h2>

                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-3xl font-bold tracking-tight text-white">RWF 4,000</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-300">/ Day</span>
                    </p>
                    <a href="{{ route('daily-checkout') }}"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 text-amber-600 ring-1 ring-inset ring-amber-200 hover:ring-amber-300">Checkout
                        Now</a>

                </div>

                <div class="rounded-3xl p-8 ring-1 ring-gray-200">
                    <h2 id="tier-freelancer" class="text-lg font-semibold leading-8 text-white">Weekly</h2>

                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-3xl font-bold tracking-tight text-white">RWF 10,000</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-200">/ Week</span>
                    </p>
                    <a href="{{ route('weekly-checkout') }}" aria-describedby="tier-freelancer"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 text-amber-600 ring-1 ring-inset ring-amber-200 hover:ring-amber-300">Pay
                        Now</a>

                </div>

                <div class="rounded-3xl p-8 ring-2 ring-amber-600">
                    <h2 id="tier-startup" class="text-lg font-semibold leading-8 text-amber-600">Monthly</h2>

                    <p class="mt-6 flex items-baseline gap-x-1">
                        <!-- Price, update based on frequency toggle state -->
                        <span class="text-3xl font-bold tracking-tight text-white">RWF 30,000</span>
                        <!-- Payment frequency, update based on frequency toggle state -->
                        <span class="text-sm font-semibold leading-6 text-gray-200">/ Month</span>
                    </p>
                    <a href="{{ route('monthly-checkout') }}" aria-describedby="tier-startup"
                        class="mt-6 block rounded-md py-2 px-3 text-center text-sm font-semibold leading-6 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600 bg-amber-600 text-white shadow-sm hover:bg-amber-500">Pay
                        Now</a>

                </div>


            </div>
        </div>



        <!-- Testimonial section -->
        <div class="mx-auto mt-24 max-w-7xl sm:mt-56 sm:px-6 lg:px-8">
            <div
                class="relative overflow-hidden bg-gray-900 px-6 py-20 shadow-xl sm:rounded-3xl sm:px-10 sm:py-24 md:px-12 lg:px-20">
                <img class="absolute inset-0 h-full w-full object-cover brightness-150 saturate-0"
                    src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1216&q=80"
                    alt="">
                <div class="absolute inset-0 bg-gray-900/90 mix-blend-multiply"></div>
                <div class="absolute -left-80 -top-56 transform-gpu blur-3xl" aria-hidden="true">
                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-[0.45]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="hidden md:absolute md:bottom-16 md:left-[50rem] md:block md:transform-gpu md:blur-3xl"
                    aria-hidden="true">
                    <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-25"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="relative mx-auto max-w-2xl lg:mx-0">
                    <img class="h-12 w-auto" src="https://tailwindui.com/img/logos/workcation-logo-white.svg"
                        alt="">
                    <figure>
                        <blockquote class="mt-6 text-lg font-semibold text-white sm:text-xl sm:leading-8">
                            <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas culpa
                                sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.”</p>
                        </blockquote>
                        <figcaption class="mt-6 text-base text-white">
                            <div class="font-semibold">Judith Black</div>
                            <div class="mt-1">CEO of Workcation</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </main>
    <x-footer-component />
</body>

</html>
