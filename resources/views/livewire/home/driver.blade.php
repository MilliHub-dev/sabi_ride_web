<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;


new #[layout('layouts.home')] class extends Component
{
}; 
?>

<div>
    <header class="w-full lg:h-[650px] bg-cover bg-center bg-no-repeat relative driver-page-bg">
        <div class="absolute inset-0 w-full bg-black opacity-30"></div>
        <div class="relative">
            <x-home.navigation />
            <x-body class="py-10 grid md:grid-cols-2 gap-6">
                <div class="text-white mt-10">
                    <div>
                        <h1 class="text-4xl leading-[3.2rem] md:text-5xl md:leading-[4rem]">Own your schedule, take trips and earn big as a <span class="text-primary">SABI</span> driver  am</h1>
                        <div class="mt-10 leading-7 md:leading-9 text-lg text-gray-200">
                            Sign up as a SABI diver today and take control of your work frequency, earn daily and above all, feel and at ease while driving
                        </div>
                    </div>
                    <div class="mt-10">
                        <a href="{{ route('signup') }}" class="text-primary bg-white rounded-full p-4 px-6 font-semibold">Become a driver</a>
                    </div>
                </div>

                <div class="w-full hidden md:block">
                    <div class="bg-white w-11/12 rounded-2xl float-end shadow-xl border p-8">
                        <h2>Sign up to <span class="text-primary">Become a driver</span> </h2>
                        <p class="my-5">It takes about 2 minutes to sign up</p>
                        <livewire:auth.signup />
                    </div>
                </div>
            </x-body>
        </div>
    </header>

    <main class="mt-10">
        <x-body>
            <section>
                <h1>Get started</h1>
                <div class="clear-both"></div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 sm:mt-14 lg:mt-44 items-center">
                    <div class="bg-primary/10 p-4 md:p-5 rounded-3xl">
                        <div class="text-primary"><x-svg.signup size="50" /></div>
                        <h2 class="mt-5">1. Sign up online</h2>
                        <p class="mt-5 leading-8 text-gray-500">
                            Our In-app services stretch out to serve other transportation needs Our In-app services stretch out to serve.
                        </p>
                        <a href="{{ route('signup') }}" class="bg-primary rounded-full px-8 p-4 text-white inline-flex items-center gap-2 mt-10">
                            <p>Apply to drive</p>
                            <x-svg.chevron-right />
                        </a>
                    </div>

                    <div class="mt-5 bg-primary/10 p-4 md:p-5 rounded-3xl">
                        <div class="text-primary"><x-svg.signup size="50" /></div>
                        <h2 class="mt-5">2. Upload your documents</h2>
                        <p class="mt-5 leading-8 text-gray-500">
                            Our In-app services stretch out to serve other transportation needs.
                        </p>
                    </div>


                    <div class="mt-5 bg-primary/10 p-4 md:p-5 rounded-3xl">
                        <div class="text-primary"><x-svg.signup size="50" /></div>
                        <h2 class="mt-5">3. Get approved</h2>
                        <p class="mt-5 leading-8 text-gray-500">
                            Our In-app services stretch out to serve other transportation needs.
                        </p>
                    </div>
                </div>
            </section>

            <section class="sm:mt-60 mt-16">
                <div class="sm:h-96 w-full rounded-3xl shadow-lg border border-gray-100 p-8 sm:p-10 grid sm:grid-cols-2 gap-16 sm:px-14">
                    <div class="order-2 sm:order-1">
                        <div class="space-y-4">
                            <h3>Be your own boss.</h3>
                            <h3>As you sabi drive,</h3>
                            <h3>you go sabi earn!</h3>
                        </div>
                        <div class="mt-4 max-w-sm">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean
                        </div>

                        <a href="{{ route('signup') }}" class="bg-primary rounded-full px-8 p-4 text-white inline-flex items-center gap-2 mt-10">
                            <p>Apply to drive</p>
                            <x-svg.chevron-right />
                        </a>
                    </div>
                    <div class="relative order-1 sm:order-2">
                        <img class="border sm:w-10/12 sm:absolute sm:-top-60 rounded-3xl sm:right-0 w-full" src="{{ asset('images/sections/driver.png') }}" />
                    </div>
                </div>
            </section>
            <section class="mt-20">
                <x-home.faq />
            </section>
            <section class="mt-20">
                <div class="w-full bg-primary rounded-3xl shadow-xl p-5 md:p-12 grid grid-cols-2 text-white">
                    <div class="flex flex-col">
                        <div class="space-y-2">
                            <h2>Download our mobile</h2>
                            <div class="flex md:block gap-1">
                                <h2 class="shrink-0">App to begin</h2>
                                <h2>Today!</h2>
                            </div>
                        </div>
                        <div class="grid md:grid-cols-2 w-full gap-6 items-end mt-5 md:mt-10">
                            <div class="inline-block">
                                <a href="" class="text-primary text-sm bg-white rounded-md px-3 h-12 items-center p-2 font-[600] shrink-0">Get the app</a>
                            </div>
                            <div class="w-32 mb-2 space-y-5 order-1">
                                <img src="{{ asset('images/sections/play_store.png') }}" alt="play store">
                                <img src="{{ asset('images/sections/app_store.png') }}" alt="apple store">
                            </div>
                        </div>
                    </div>
                    <div class="flex items-end w-full shrink-0">
                        <div class="shrink-0 w-10 md:w-20">
                            <img src="{{ asset('images/sections/qr-code.png') }}" alt="qr-code">
                        </div>
                        <div class="w-full shrink-0">
                            <img src="{{ asset('images/sections/phones_mockup.png') }}" class="w-10/12" alt="phones mockup">
                        </div>
                    </div>
                </div>
            </section>
        </x-body>
    </main>
</div>