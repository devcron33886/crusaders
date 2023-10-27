<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index,follow" />
    <meta name="description" content="{{ $description}}" />
    <meta name="keywords" content="{{ $keywords }}" />
    <meta name="author" content="Jacques MBABAZI" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="theme-color" content="#ffffff">
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@JabaleeSports" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:description" content="{{ $description }}" />
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

    <main class="isolate">
        <!-- Hero section -->
        <div class="relative isolate -z-10">
            <svg class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-amber-400 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
                aria-hidden="true">
                <defs>
                    <pattern id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84" width="200" height="200" x="50%" y="-1"
                        patternUnits="userSpaceOnUse">
                        <path d="M.5 200V.5H200" fill="none" />
                    </pattern>
                </defs>
                <svg x="50%" y="-1" class="overflow-visible fill-amber-100">
                    <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
                        stroke-width="0" />
                </svg>
                <rect width="100%" height="100%" stroke-width="0" fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)" />
            </svg>
            <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
                aria-hidden="true">
                <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
                    style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)">
                </div>
            </div>
            <div class="overflow-hidden">
                <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
                    <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
                        <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl">We asre shaping careers
                                in basketball.</h1>
                            <p class="relative mt-6 text-lg leading-8 text-gray-100 sm:max-w-md lg:max-w-none">JABALEE
                                Sports Management has a vision to be the leading sports and Entertainment Company
                                while connecting Africa to the global sports market. Talent management is a major goal
                                for us at
                                JABALEE SM. We are currently identifying, nurturing, grooming and growing our talents
                                the right
                                way at the CRUSADERS BASKETBALL ACADEMY.

                            </p>
                            <p class="relative mt-6 text-lg leading-8 text-gray-100 sm:max-w-md lg:max-w-none">
                                We therefore agreed that starting up Sports academies is the way to go and having the
                                best
                                coaches involved with our athletes is vital to their success. We are equipping our
                                athletes
                                between the ages 6 years to 16 years with the basic fundamentals of the game,
                                discipline, Team
                                work, hard work, etiquette, professional mindset and being respectful of all people
                                around them.
                                The goal is to ensure that our athletes are well trained, groomed and develop the right
                                way from
                                an early age so as to have a successful path to their future opportunities and ensuring
                                they have
                                the consistency to stay at the top of their game no matter where they go.

                            </p>
                        </div>
                        <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
                            <div
                                class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/1152853/pexels-photo-1152853.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&h=528&q=80"
                                        alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/8337468/pexels-photo-8337468.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&h=528&q=80"
                                        alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/2834914/pexels-photo-2834914.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80"
                                        alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                            </div>
                            <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/5756239/pexels-photo-5756239.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&crop=left&w=400&h=528&q=80"
                                        alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
                                    <div
                                        class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10">
                                    </div>
                                </div>
                                <div class="relative">
                                    <img src="https://images.pexels.com/photos/2834914/pexels-photo-2834914.jpeg?auto=compress&cs=tinysrgb&w=600&auto=format&fit=crop&h=528&q=80"
                                        alt=""
                                        class="aspect-[2/3] w-full rounded-xl bg-gray-900/5 object-cover shadow-lg">
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

        <!-- Content section -->
        <div class="mx-auto -mt-12 max-w-7xl px-6 sm:mt-0 lg:px-8 xl:-mt-8">
            <div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none mt-4">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our mission</h2>
                    <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                        <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                            <p class="text-xl leading-8 text-white">To be a leader in spotting, scouting, identifying
                                young talents and developing them
                                into elite young athletes who will stand out and be dominant at any destination they go.
                            </p>

                        </div>

                    </div>
                </div>
                <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none mt-4">
                    <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Vision</h2>
                    <div class="mt-6 flex flex-col gap-x-8 gap-y-20 lg:flex-row">
                        <div class="lg:w-full lg:max-w-2xl lg:flex-auto">
                            <p class="text-xl leading-8 text-white">To be the leading talent hub in Africa, with well
                                groomed, nurtured and elite young
                                athletes playing consistently at highest level while exhibiting great discipline and
                                professionalism.
                                Availing these athletes opportunities all over the world.
                            </p>

                        </div>

                    </div>
                </div>
            </div>

        </div>

        <!-- Image section -->
        <div class="mt-32 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
            <img src="https://images.pexels.com/photos/3818667/pexels-photo-3818667.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1&auto=format&fit=crop&w=2832&q=80"
                alt="" class="aspect-[5/2] w-full object-cover xl:rounded-3xl">
        </div>

        <!-- Values section -->
        <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8" id="programs">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Programs</h1>
                <p class="mt-6 text-lg leading-8 text-gray-100">Our program is composed of two major categories which
                    are fundamental program (from 5 years to 15 years) and elite program(from 16 years and above).</p>
            </div>
            <h4 class="text-xl mt-12 font-bold tracking-tight text-white sm:text-4xl">Foundamental program</h4>
            <dl
                class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div>
                    <dt class="font-semibold text-white">1. PASSING</dt>
                    <dd class="mt-1 text-white">Passing fundamentals, Bounce pass,
                        Chest pass, Over head pass, spear
                        pass how to execute pass
                        fundamentally, stance, form, feet,
                        finger tips, all key pointers.
                    </dd>
                </div>
                <div>
                    <dt class="font-semibold text-white">2. DRIBBLING</dt>
                    <dd class="mt-1 text-gray-100">Fundamentals on dribbling and ball
                        handling, emphasis on how we
                        dribble, ball protection, looking up,
                        types of dribbling styles, between the
                        legs, behind the back, drop step with
                        the how, why and when for the
                        athletes to fully understand &
                        execute.</dd>
                </div>
                <div>
                    <dt class="font-semibold text-gray-100">3. SHOOTING </dt>
                    <dd class="mt-1 text-gray-100">Fundamentals in Shooting such as
                        Follow through, Fingers, Release,
                        Elbow and stance plus shooting form.
                        We ensure the athletes learn and
                        execute their shooting fundamentally
                        with great coaches available.
                        Different types of shots are taught
                        such as Jump shot, lay up shot, step
                        back shot, fade away shot, tear drop,
                        floater among others.</dd>
                </div>
                <div>
                    <dt class="font-semibold text-gray-100">4. DEFENSE </dt>
                    <dd class="mt-1 text-gray-100">Fundamentals on how we defend in
                        basketball ; use our feet, slides, arm
                        bar, see man and see ball, pistols,
                        communication in Team defense,
                        defending screens, box outs,
                        rebounding, blocking shots,
                        positioning , defensive rotation,
                        recover on defense, transitioning
                        from offense to defense, turn your
                        back, back peddling, tracing the ball,
                        pressing the ball, pressure on ball,
                        contesting shots among others.</dd>
                </div>
            </dl>
            <div class="mx-auto max-w-7xl lg:mx-0 mt-12">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Elite Program</h1>
                <p class="mt-6 text-lg leading-8 text-gray-100">At Crusaders Basketball Academy we do run special
                    sessions of about 1 hour to 2 hours for preparation of our elite players category to enable them get
                    to the elite level of playing the game.

                    This program helps to speed up the development and growth drastically from one session to another.
                    Within 3 to 4 months the player will have refined and mastered certain skill sets that will make him
                    exceptional and stand out.

                    The process is usually as follows(IRM)

                    Introduce skills
                    Refine skills
                    Master skills
                    The athletes or our trainees are taken vigorously through these intense sessions.
                </p>
            </div>

            <dl
                class="mx-auto mt-8 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 text-base leading-7 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                <div>
                    <dt class="font-semibold text-white uppercase">1. Ball handling drills
                    </dt>
                    <dd class="mt-1 text-white">Machine gun dribble,single and double cross, dribbling stance, single
                        and double crossover.

                        Behind the back dribble, between the legs dribble and blind fold dribble.
                        Attack and retreat dribble,hesitation dribble, in and out dribble.

                    </dd>
                </div>
                <div>
                    <dt class="font-semibold text-white uppercase">2. Passing drills
                    </dt>
                    <dd class="mt-1 text-gray-100">Wall to wall passing,two man break(dribble and pass,layup)
                        Three man weave passing(lay up and shooting)
                        .</dd>
                </div>
                <div>
                    <dt class="font-semibold text-gray-100 uppercase">3. Conditioning drills </dt>
                    <dd class="mt-1 text-gray-100">Short sprints(variation with cones),full court run,strength
                        drills(push up,sit up and others,box out),maican drills (left and right under
                        basket),ladder(different movements work on footwork and agility and fundamental defensive
                        slides).</dd>
                </div>
                <div>
                    <dt class="font-semibold text-gray-100">4. Offensive drills </dt>
                    <dd class="mt-1 text-gray-100">Master the triple threat attack(options), pivoting(180 to 360 degrees
                        variations),read and react offense(options). Pick N roll(offense and options,single and double
                        screen, pick N pop, dummy screen and back door screen).
                        Drive and click, dribble handoff, hand over offense,extra pass,give and go, pass and cut and
                        various offensive options.
                    </dd>
                </div>
            </dl>
        </div>



        <!-- Team section -->



    </main>
    <x-footer-component />
</body>

</html>