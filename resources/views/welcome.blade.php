<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="vite:mode" content="development">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="Jacques MBABAZI">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://crusaders.africa">

    <!-- Twitter Card meta tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@JabaleeSports">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="https://images.pexels.com/photos/1752757/pexels-photo-1752757.jpeg">

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

<body class="antialiased">
    @include('layouts.menu')

    <div class="relative isolate overflow-hidden pt-14">

        <img src="https://images.pexels.com/photos/1752757/pexels-photo-1752757.jpeg?&auto=format&fit=crop&w=2830&q=80&blend=111827&sat=-100&exp=15&blend-mode=multiply"
            alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
            aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[rgb(240,192,62)] to-[rgb(161,61,243)] opacity-20 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div
                    class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-400 ring-1 ring-white/50 hover:ring-white/20">
                    Announcing our registration to the new players. <a href="{{ route('register-player.index')}}"
                        class="font-semibold text-white"><span class="absolute inset-0" aria-hidden="true"></span>Read
                        more <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">Welcome to the home of champions
                </h1>
                <p class="mt-6 text-lg leading-8 text-gray-300">JABALEE
                    Sports Management has a vision to be the leading sports and Entertainment Company
                    while connecting Africa to the global sports market. Talent management is a major goal
                    for us at
                    JABALEE SM. We are currently identifying, nurturing, grooming and growing our talents
                    the right
                    way at the CRUSADERS BASKETBALL ACADEMY.
                </p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="{{ route('register-player.index')}}"
                        class="rounded-md bg-amber-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-amber-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-400">Register
                        a player
                    </a>
                    <a href="{{ route('about')}}" class="text-sm font-semibold leading-6 text-white">Learn more <span
                            aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-20 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
    <div class="relative isolate -z-10">
        <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-amber-300 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
            aria-hidden="true">
            <defs>
                <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                    patternUnits="userSpaceOnUse">
                    <path d="M.5 200V.5H200" fill="none" />
                </pattern>
            </defs>
            <svg x="50%" y="-1" class="overflow-visible fill-amber-400">
                <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                    stroke-width="0" />
            </svg>
            <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
        </svg>
        <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
            aria-hidden="true">
            <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[rgb(255,236,128)] to-[rgb(22,20,22)] opacity-30"
                style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)">
            </div>
        </div>
        <div class="overflow-hidden">
            <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                    <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                        <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">We’re shapping careers
                            in basket ball.</h1>
                        <p class="relative mt-6 text-lg leading-8 text-gray-900 sm:max-w-md lg:max-w-none">JABALEE
                            Sports Management has a vision to be the leading sports and Entertainment Company
                            while connecting Africa to the global sports market. Talent management is a major goal
                            for us at
                            JABALEE SM. We are currently identifying, nurturing, grooming and growing our talents
                            the right
                            way at the CRUSADERS BASKETBALL ACADEMY.

                        </p>

                    </div>
                    <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                        <div
                            class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                            <div class="relative">
                                <img src="https://images.pexels.com/photos/1152853/pexels-photo-1152853.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&h=528&q=80"
                                    alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                        </div>
                        <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                            <div class="relative">
                                <img src="https://images.pexels.com/photos/8337468/pexels-photo-8337468.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&h=528&q=80"
                                    alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                            <div class="relative">
                                <img src="https://images.pexels.com/photos/2834914/pexels-photo-2834914.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80"
                                    alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                        </div>
                        <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                            <div class="relative">
                                <img src="https://images.pexels.com/photos/5756239/pexels-photo-5756239.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&crop=left&w=400&h=528&q=80"
                                    alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                            <div class="relative">
                                <img src="https://images.pexels.com/photos/2834914/pexels-photo-2834914.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&h=528&q=80"
                                    alt="" class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                <div
                                    class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-gray-900 py-24 sm:py-32">
        <div class="mx-auto max-w-7xl px-6 text-center lg:px-8">
            <div class="mx-auto max-w-2xl">
                <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Meet our team</h2>
                <p class="mt-4 text-lg leading-8 text-gray-100">We’re a dynamic group of individuals who are passionate
                    about shaping the careers of young people.
                    about what we do.</p>
            </div>
            <ul role="list"
                class="mx-auto mt-20 grid max-w-2xl grid-cols-1 gap-6 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3 lg:gap-8">
                <li class="rounded-2xl bg-gray-800 px-8 py-10">
                    <img class="mx-auto h-auto w-48 rounded-full md:h-56 md:w-56"
                        src="{{ asset('assets/coach-chris.jpg')}}" alt="">
                    <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight uppercase text-white">Christopher
                        Kyebambe
                    </h3>
                    <p class="text-sm leading-6 text-gray-100">Head Coach</p>

                </li>

                <li class="rounded-2xl bg-gray-800 px-8 py-10">
                    <img class="mx-auto h-48 w-48 rounded-full md:h-56 md:w-56" src="{{ asset('assets/brian.jpeg')}}"
                        alt="">
                    <h3 class="mt-6 text-base font-semibold leading-7 uppercase tracking-tight text-white">Brian Kirungi
                    </h3>
                    <p class="text-sm leading-6 text-gray-100">Legal Advisor</p>

                </li>


                <!-- More people... -->
            </ul>
        </div>
    </div>
    <div class="relative isolate bg-white pb-32 pt-24 sm:pt-32">
        <div class="absolute inset-x-0 top-1/2 -z-10 -translate-y-1/2 transform-gpu overflow-hidden opacity-30 blur-3xl"
            aria-hidden="true">
            <div class="ml-[max(50%,38rem)] aspect-[1313/771] w-[82.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="absolute inset-x-0 top-0 -z-10 flex transform-gpu overflow-hidden pt-32 opacity-25 blur-3xl sm:pt-40 xl:justify-end"
            aria-hidden="true">
            <div class="ml-[-22rem] aspect-[1313/771] w-[82.0625rem] flex-none origin-top-right rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] xl:ml-0 xl:mr-[calc(50%-12rem)]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-xl text-center">
                <h2 class="text-lg font-semibold leading-8 tracking-tight text-indigo-600">Testimonials</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We have worked with
                    different players and parents.</p>
            </div>
            <div
                class="mx-auto mt-16 grid max-w-2xl grid-cols-1 grid-rows-1 gap-8 text-sm leading-6 text-gray-900 sm:mt-20 sm:grid-cols-2 xl:mx-0 xl:max-w-none xl:grid-flow-col xl:grid-cols-4">
                <figure
                    class="col-span-2 hidden sm:block sm:rounded-2xl sm:bg-white sm:shadow-lg sm:ring-1 sm:ring-gray-900/5 xl:col-start-2 xl:row-end-1">
                    <blockquote class="p-12 text-xl font-semibold leading-8 tracking-tight text-gray-900">
                        <p>“Integer id nunc sit semper purus. Bibendum at lacus ut arcu blandit montes vitae auctor
                            libero. Hac condimentum dignissim nibh vulputate ut nunc. Amet nibh orci mi venenatis
                            blandit vel et proin. Non hendrerit in vel ac diam.”</p>
                    </blockquote>
                    <figcaption class="flex items-center gap-x-4 border-t border-gray-900/10 px-6 py-4">
                        <img class="h-10 w-10 flex-none rounded-full bg-gray-50"
                            src="https://images.unsplash.com/photo-1550525811-e5869dd03032?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=1024&h=1024&q=80"
                            alt="">
                        <div class="flex-auto">
                            <div class="font-semibold">Brenna Goyette</div>
                            <div class="text-gray-600">@brennagoyette</div>
                        </div>
                        <img class="h-10 w-auto flex-none"
                            src="https://tailwindui.com/img/logos/savvycal-logo-gray-900.svg" alt="">
                    </figcaption>
                </figure>
                <div class="space-y-8 xl:contents xl:space-y-0">
                    <div class="space-y-8 xl:row-span-2">
                        <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                            <blockquote class="text-gray-900">
                                <p>“Laborum quis quam. Dolorum et ut quod quia. Voluptas numquam delectus nihil. Aut
                                    enim doloremque et ipsam.”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-gray-50"
                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div>
                                    <div class="font-semibold">Leslie Alexander</div>
                                    <div class="text-gray-600">@lesliealexander</div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- More testimonials... -->
                    </div>
                    <div class="space-y-8 xl:row-start-1">
                        <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                            <blockquote class="text-gray-900">
                                <p>“Aut reprehenderit voluptatem eum asperiores beatae id. Iure molestiae ipsam ut
                                    officia rem nulla blanditiis.”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-gray-50"
                                    src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div>
                                    <div class="font-semibold">Lindsay Walton</div>
                                    <div class="text-gray-600">@lindsaywalton</div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- More testimonials... -->
                    </div>
                </div>
                <div class="space-y-8 xl:contents xl:space-y-0">
                    <div class="space-y-8 xl:row-start-1">
                        <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                            <blockquote class="text-gray-900">
                                <p>“Voluptas quos itaque ipsam in voluptatem est. Iste eos blanditiis repudiandae. Earum
                                    deserunt enim molestiae ipsum perferendis recusandae saepe corrupti.”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-gray-50"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div>
                                    <div class="font-semibold">Tom Cook</div>
                                    <div class="text-gray-600">@tomcook</div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- More testimonials... -->
                    </div>
                    <div class="space-y-8 xl:row-span-2">
                        <figure class="rounded-2xl bg-white p-6 shadow-lg ring-1 ring-gray-900/5">
                            <blockquote class="text-gray-900">
                                <p>“Molestias ea earum quos nostrum doloremque sed. Quaerat quasi aut velit incidunt
                                    excepturi rerum voluptatem minus harum.”</p>
                            </blockquote>
                            <figcaption class="mt-6 flex items-center gap-x-4">
                                <img class="h-10 w-10 rounded-full bg-gray-50"
                                    src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="">
                                <div>
                                    <div class="font-semibold">Leonard Krasner</div>
                                    <div class="text-gray-600">@leonardkrasner</div>
                                </div>
                            </figcaption>
                        </figure>

                        <!-- More testimonials... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer-component />


</body>

</html>