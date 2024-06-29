<div x-data="{ open:false }" class="w-full z-50 bg-white">
    <div class="w-full h-20 flex items-center justify-center shadow-lg border" :class="{'block': ! open, 'hidden': open}">
        <x-body class="w-full text-primary text-xs">
            <div class="hidden md:flex items-center justify-between">
                <div>
                    <x-application-logo />
                </div>
                <div class="flex gap-5 items-center">
                    <a href="">Drive or deliver</a>
                    <a href="">Support</a>
                    <a href="">SABI business</a>
                    <a href="">About</a>
                </div>
                <div class="flex items-center gap-5">
                    <div class="flex items-center gap-1">
                        <p class="text-zinc-700"><x-svg.globe /></p>
                        <p>EN</p>
                    </div>
                    <a href="">Log in</a>
                    <a href="" class="text-white text-sm bg-primary rounded-full p-3 px-6 font-semibold">Sign up</a>
                </div>
            </div>

            <div class="flex md:hidden justify-between">
                <button x-on:click="open = ! open" class="transition duration-150 ease-in-out">
                    <svg width="32" height="20" viewBox="0 0 32 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="26" height="4" rx="2" fill="white"/>
                        <rect x="6" y="8" width="26" height="4" rx="2" fill="white"/>
                        <rect y="16" width="26" height="4" rx="2" fill="white"/>
                    </svg>
                </button>
                <div>
                    <x-application-logo />
                </div>
            </div>
        </x-body>
    </div>
    <div class="w-full md:hidden flex items-center justify-center">
        <div :class="{'block': open, 'hidden': ! open}" class="w-full h-screen bg-white p-4 backdrop-blur-lg">
            <div class="flex items-center justify-between mt-10">
                <img src="{{ asset('images/sections/car_tie.png') }}" alt="" class="h-20">
                <button class="border shadow-md rounded-full size-14 flex items-center justify-center transition duration-150 ease-in-out" x-on:click="open = false">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="p-5 space-y-5 mt-10">
                <x-nav-link :active="request()->routeIs('home')">
                    Homepage
                </x-nav-link>

                <x-nav-link :active="request()->routeIs('login')">
                    Log in
                </x-nav-link>

                <x-nav-link :active="request()->routeIs('services')">
                    Services
                </x-nav-link>

                <x-nav-link :active="request()->routeIs('contact')">
                    Contact
                </x-nav-link>
            </div>
        </div>
    </div>
</div>