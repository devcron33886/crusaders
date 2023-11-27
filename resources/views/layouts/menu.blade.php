<nav x-data="{ open: false }" class="absolute inset-x-0 top-0 z-50">
    <div class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="-m-1.5 p-1.5">
                <span class="sr-only">{{ config('app.name') }}</span>
                <img class="h-20 w-auto" src="{{ asset('assets/logo.png') }}" alt="{{ config('app.name') }}">
            </a>
        </div>
        <div class="flex lg:hidden">
            <button @click="open = ! open" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-400">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" stroke-linecap="round"
                        stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="/" class="text-sm font-semibold leading-6 text-white">Home</a>
            <a href="{{ route('about') }}" class="text-sm font-semibold leading-6 text-white" wire:navigate>About us</a>
            <a href="{{ route('about') }}/#programs" class="text-sm font-semibold leading-6 text-white">Programs</a>
            <a href="{{ route('pricing') }}" class="text-sm font-semibold leading-6 text-white">Pricing</a>
            <a href="{{ route('contact.index') }}" class="text-sm font-semibold leading-6 text-white">Contact us</a>
        </div>
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="{{ route('register-player.index') }}"
                class="text-sm font-semibold leading-6 text-white">Registration is
                Open <span aria-hidden="true">&rarr;</span></a>
        </div>
    </div>
    <!-- Mobile menu, show/hide based on menu open state. -->
    <div :class="{ 'block': open, 'hidden': !open }" class="lg:hidden" role="dialog" aria-modal="true">
        <!-- Background backdrop, show/hide based on slide-over state. -->
        <div class="fixed inset-0 z-50"></div>
        <div
            class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-white/10">
            <div class="flex items-center justify-between">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">{{ config('app.name') }}</span>
                    <img class="h-8 w-auto" src="{{ asset('assets/logo.png') }}" alt="{{ config('app.name') }}">
                </a>
                <button @click="open = ! open" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-400">
                    <span class="sr-only">Close menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" stroke-linecap="round"
                            stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="mt-6 flow-root">
                <div class="-my-6 divide-y divide-gray-500/25">
                    <div class="space-y-2 py-6">
                        <a href="/"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Home</a>
                        <a href="{{ route('about') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">About
                            us</a>
                        <a href="{{ route('about') }}/#programs"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Programs</a>
                        <a href="{{ route('pricing') }}/"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Pricing</a>
                        <a href="{{ route('contact.index') }}"
                            class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-white hover:bg-gray-800">Contect
                            us</a>
                    </div>
                    <div class="py-6">
                        <a href="{{ route('register-player.index') }}"
                            class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-white hover:bg-gray-800">Register
                            a
                            player
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
