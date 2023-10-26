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
                <div class="mx-auto max-w-6xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32 mt-24">
                    <div class="py-8 px-8 mt-24 bg-white shadow-sm sm:rounded-lg">
                        <h1 class="text-3xl text-center font-bold text-gray-900">Registration is Open</h1>
                        <div class="mt-4">
                            <p class="text-sm text-center text-gray-900">
                                Fill this form for new player registration details at crusaders basketball club and we
                                will
                                get back to you.

                            </p>
                        </div>
                        @if (session()->has('success'))
                        <div class="border-l-4 border-green-400 bg-green-700 p-4 shadow-sm rounded-md">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="w-5 h-5 text-green-400">
                                        <path fill-rule="evenodd"
                                            d="M8.603 3.799A4.49 4.49 0 0112 2.25c1.357 0 2.573.6 3.397 1.549a4.49 4.49 0 013.498 1.307 4.491 4.491 0 011.307 3.497A4.49 4.49 0 0121.75 12a4.49 4.49 0 01-1.549 3.397 4.491 4.491 0 01-1.307 3.497 4.491 4.491 0 01-3.497 1.307A4.49 4.49 0 0112 21.75a4.49 4.49 0 01-3.397-1.549 4.49 4.49 0 01-3.498-1.306 4.491 4.491 0 01-1.307-3.498A4.49 4.49 0 012.25 12c0-1.357.6-2.573 1.549-3.397a4.49 4.49 0 011.307-3.497 4.49 4.49 0 013.497-1.307zm7.007 6.387a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                            clip-rule="evenodd" />
                                    </svg>

                                </div>
                                <div class="ml-3">
                                    <p class="text-sm text-white">
                                        Success
                                    <p class="font-medium text-white">{{ session('success') }}</p>
                                    </p>
                                </div>
                            </div>
                        </div>

                        @endif
                        @if (session()->has('error'))
                        <x-alert type="error" class="mt-4 bg-red-700">
                            <strong class="font-bold">Alert!</strong>
                            <span class="block sm:inline">{{ session('error') }}</span>
                        </x-alert>
                        @endif
                        <form method="POST" action="{{ route('trainee.register')}}">
                            @csrf
                            <div class="grid grid-cols-1 gap-x-8 gap-y-2 sm:grid-cols-2">
                                <div class="mt-4">
                                    <x-input-label for="program" :value="__('Program')" />
                                    <select id="category" name="category"
                                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-smblock mt-1 w-full"
                                        autofocus :value="old('category')">
                                        <option value disabled {{ old('category', null) === null ? 'selected' : '' }}>Select program</option>
                                        @foreach(App\Models\Trainee::CATEGORY_SELECT as $key => $label)
                                            <option value="{{ $key }}" {{ old('category', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                        @endforeach
                                    </select>
                                    
                                    <x-input-error :messages="$errors->get('category')" class="mt-2" />
                                </div>
                                <!-- Name -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                        :value="old('name')" autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>
                                <!-- Father Name -->
                                <div class="mt-4">
                                    <x-input-label for="parent" :value="__('Parent/Guardian')" />
                                    <x-text-input id="parent" class="block mt-1 w-full" type="text"
                                        name="parent" :value="old('parent')" />
                                    <x-input-error :messages="$errors->get('parent')" class="mt-2" />
                                </div>

                                <!-- Father Phone -->
                                <div class="mt-4">
                                    <x-input-label for="phone" :value="__('Parent Phone Number')" />
                                    <x-text-input id="parent_phone" class="block mt-1 w-full" type="tel"
                                        name="parent_phone" :value="old('parent_phone')" />
                                    <x-input-error :messages="$errors->get('parent_phone')" class="mt-2" />
                                </div>
                                <!-- Next of kin name -->
                                <div class="mt-4">
                                    <x-input-label for="kinname" :value="__('Next of kin name')" />
                                    <x-text-input id="kinname" class="block mt-1 w-full" type="text"
                                        name="next_of_kin_name" :value="old('next_of_kin_name')" />
                                    <x-input-error :messages="$errors->get('next_of_kin_name')" class="mt-2" />
                                </div>
                                <!-- Next of kin phone -->
                                <div class="mt-4">
                                    <x-input-label for="kinphone" :value="__('Next of kin phone')" />
                                    <x-text-input id="kinphone" class="block mt-1 w-full" type="tel"
                                        name="next_of_kin_phone" :value="old('next_of_kin_phone')" />
                                    <x-input-error :messages="$errors->get('next_of_kin_phone')" class="mt-2" />
                                </div>
                                <!-- Next of kin relationship -->
                                <div class="mt-4">
                                    <x-input-label for="kinrelationship" :value="__('Next of kin relationship')" />
                                    <x-text-input id="kinrelationship" class="block mt-1 w-full" type="text"
                                        name="next_of_kin_relationship" :value="old('next_of_kin_relationship')" />
                                    <x-input-error :messages="$errors->get('next_of_kin_relationship')" class="mt-2" />
                                </div>
                                <!-- date birth day -->
                                <div class="mt-4">
                                    <x-input-label for="name" :value="__('Date of birth')" />
                                    <x-text-input id="date_of_birth" class="block mt-1 w-full" type="date"
                                        name="date_of_birth" :value="old('date_of_birth')" />
                                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                                </div>
                                <!-- Health insurance -->
                                <div class="mt-4">
                                    <x-input-label for="insurance"
                                        :value="__('Enter player health Insurance he/she use')" />
                                    <x-text-input id="insurance" class="block mt-1 w-full" type="text"
                                        name="health_insurance" :value="old('health_insurance')" />
                                    <x-input-error :messages="$errors->get('health_insurance')" class="mt-2" />
                                </div>
                                <!-- Medical history -->
                                <div class="mt-4">
                                    <x-input-label for="medical" :value="__('Enter player health details here')" />
                                    <textarea rows="4" name="medical_history" id="medical" class="block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6"> {{ old('medical_history')}}</textarea>
                                    
                                    <x-input-error :messages="$errors->get('medical_history')" class="mt-2" />
                                </div>
                            </div>
                            <div class="mt-4">
                                <x-primary-button type="submit">
                                    {{ __('Register a player') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <x-footer-component />
</x-front-layout>