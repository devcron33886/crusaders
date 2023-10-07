<x-front-layout>
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
                <div class="mx-auto max-w-6xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32 ">
                    <div class="py-4 px-4 bg-white/75 shadow-sm sm:rounded-lg">
                        <h1 class="text-3xl text-center font-bold text-white">Register Open</h1>
                        <div class="mt-4">
                            <p class="text-sm text-center text-gray-100">
                                Fill this form for new player registration details at crusaders basketball club and we
                                will
                                get back to you.

                            </p>
                        </div>
                        <form method="POST" action="{{ route('register-player.store') }}">
                            @csrf
                            <div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
                                <!-- Name -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <!--  -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Date of birth')" />
                                    <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date"
                                        name="date_of_birth" :value="old('date_of_birth')" required />
                                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                </div>
                                <!-- Height -->
                                <div class="mt-4">
                                    <x-input-label for="height" :value="__('Enter player Height in centimeters')" />
                                    <x-text-input id="height" class="block mt-1 w-full" type="number" name="height"
                                        :value="old('height')" required />
                                    <x-input-error :messages="$errors->get('height')" class="mt-2" />
                                </div>
                                <!-- Height -->
                                <div class="mt-4">
                                    <x-input-label for="weight" :value="__('Enter player Weight in Kilograms')" />
                                    <x-text-input id="weight" class="block mt-1 w-full" type="number" name="weight"
                                        :value="old('weight')" required />
                                    <x-input-error :messages="$errors->get('weight')" class="mt-2" />
                                </div>
                                <!-- School -->
                                <div class="mt-4">
                                    <x-input-label for="school" :value="__('Enter player School he/She attend')" />
                                    <x-text-input id="school" class="block mt-1 w-full" type="text" name="school"
                                        :value="old('school')" required />
                                    <x-input-error :messages="$errors->get('school')" class="mt-2" />
                                </div>
                                <!-- Health insurance -->
                                <div class="mt-4">
                                    <x-input-label for="insurance"
                                        :value="__('Enter player health Insurance he/she use')" />
                                    <x-text-input id="insurance" class="block mt-1 w-full" type="text"
                                        name="health_insurance" :value="old('health_insurance')" required />
                                    <x-input-error :messages="$errors->get('health_insurance')" class="mt-2" />
                                </div>
                                <!-- Medical history -->
                                <div class="mt-4">
                                    <x-input-label for="medical" :value="__('Enter player health details here')" />
                                    <x-text-input id="medical" class="block mt-1 w-full" type="text"
                                        name="medical_history" :value="old('medical_history')" required />
                                    <x-input-error :messages="$errors->get('medical_history')" class="mt-2" />
                                </div>
                            </div>

                            <x-primary-button class="mt-4">
                                {{ __('Register a player') }}
                            </x-primary-button>


                        </form>
                    </div>
                </div>
            </div>
        </div>








    </main>

</x-front-layout>