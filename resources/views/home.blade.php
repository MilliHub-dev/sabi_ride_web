<x-home-layout>
    <header class="w-full min-h-[600px] bg-cover bg-center bg-no-repeat relative home-bg">
        <div class="absolute inset-0 w-full bg-black opacity-30"></div>
        <div class="relative">
            <x-home.navigation />
            <x-body class="pt-10">
                <div class="text-white">
                    <div class="max-w-lg">
                        <h1 class="text-5xl leading-[4rem]">Anywhere wey you dey go, we <span class="text-primary">SABI</span> am</h1>
                        <div class="mt-10 leading-7 md:leading-9 text-lg text-gray-200">
                            <p>Sabi Ride is a social ride hailing/sharing platform revolved around providing convenience, safety, and efficiency for riders and drivers.</p> 
                            <p>Sabi ride Driven by safety, fueled by convenience.</p>
                        </div>
                    </div>
                    <div class="mt-10 max-w-6xl md:flex justify-between items-center">
                        <div>
                            <a href="{{ route('become.driver') }}" class="text-primary bg-white rounded-full p-4 px-6 font-semibold">Become a driver</a>
                        </div>
                        <div class="flex items-center gap-10 mt-5 md:mt-0">
                            <div class="bg-zinc-900 p-3 px-5 rounded-lg inline-block mt-5">
                                <img src="{{ asset('images/sections/app_store.png') }}" class="h-5" alt="app store">
                            </div>
                            <div class="bg-zinc-900 p-3 px-5 rounded-lg inline-block mt-5">
                                <img src="{{ asset('images/sections/play_store.png') }}" class="h-5" alt="play store">
                            </div>
                        </div>
                    </div>
                </div>
            </x-body>
        </div>
    </header>
    <main class="mt-20">
        <x-body>
            <h2 class="text-gray-700">Our Services</h2>
            <section>
                <div class="grid gap-4 grid-cols-2 md:grid-cols-3 mt-5">
                    <div class="card">
                        <div class="flex flex-col md:flex-row h-full justify-between">
                            <div>
                                <h3 class="text-gray-700">Rides</h3>
                                <p class="mt-2 max-w-[12rem] text-gray-500 text-xs leading-5">Set location, offer price start trip </p>
                            </div>
                            <div class="md:flex md:w-auto w-full items-end shrink-0">
                                <img src="{{ asset('images/sections/rides.png') }}" alt="rides" class="h-16 md:h-14 shink-0 float-end">
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="flex flex-col md:flex-row h-full justify-between">
                            <div>
                                <h3 class="text-gray-700">Dispatch</h3>
                                <p class="mt-2 max-w-[12rem] text-gray-500 text-xs leading-5">Swift order delivery with our riders </p>
                            </div>
                            <div class="md:flex md:w-auto w-full items-end shrink-0">
                                <img src="{{ asset('images/sections/dispatch.png') }}" alt="rides" class="h-16 md:h-14 shink-0 float-end"">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flex flex-col md:flex-row h-full justify-between">
                            <div>
                                <h3 class="text-gray-700">Group Ride</h3>
                                <p class="mt-2 max-w-[12rem] text-gray-500 text-xs leading-5">Coordinate group rides with friends and family</p>
                            </div>
                            <div class="md:flex md:w-auto w-full items-end shrink-0">
                                <img src="{{ asset('images/sections/group_ride.png') }}" alt="rides" class="h-16 md:h-14 shink-0 float-end">
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flex flex-col md:flex-row h-full justify-between">
                            <div>
                                <h3 class="text-gray-700">Vip Rides</h3>
                                <p class="mt-2 max-w-[12rem] text-gray-500 text-xs leading-5">You prioritize comfort and your luxury, we serve it</p>
                            </div>
                            <div class="md:flex md:w-auto w-full items-end shrink-0">
                                <img src="{{ asset('images/sections/vip_ride.png') }}" alt="rides" class="h-16 md:h-14 shink-0 float-end">
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flex flex-col md:flex-row h-full justify-between">
                            <div>
                                <h3 class="text-gray-700">Logistics</h3>
                                <p class="mt-2 max-w-[12rem] text-gray-500 text-xs leading-5">We cover logistics for SMEs</p>
                            </div>
                            <div class="md:flex md:w-auto w-full items-end shrink-0">
                                <img src="{{ asset('images/sections/logistics.png') }}" alt="rides" class="h-16 md:h-14 shink-0 float-end">
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="flex flex-col md:flex-row h-full justify-between">
                            <div>
                                <h3 class="text-gray-700">Groceries</h3>
                                <p class="mt-2 max-w-[12rem] text-gray-500 text-xs leading-5">Order from your favourite stores </p>
                            </div>
                            <div class="md:flex md:w-auto w-full items-end mb-1 shrink-0">
                                <img src="{{ asset('images/sections/groceries.png') }}" alt="rides" class="h-16 md:h-14 shink-0 float-end">
                                <div class="clear-both"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section class="mt-20 gap-4">
                <div class="mx-auto hidden md:block">
                    <h2 class="text-center text-gray-700">Earn money with<span class="text-primary"> SABI</span> Ride</h2>
                    <div class="flex item-center justify-center gap-5 mt-5">
                        <a href="" class="bg-primary text-sm text-white shadow-xl rounded-full p-4 w-32 text-center">Driver</a>
                        <a href="" class="text-primary text-sm bg-white shadow-xl border border-gray-100 w-40 text-center rounded-full p-4">Dispatch Rider</a>
                    </div>
                </div>
            </section>

            <section class="mt-20">
                <div class="grid md:grid-cols-2 items-center gap-8">
                    <div class="flex items-center justify-center">
                        <img src="{{ asset('images/sections/car_driver.png') }}" alt="car driver" class="w-full ">
                    </div>
                    <div class="h-full flex flex-col space-y-8"> 
                        <div class="mx-auto block md:hidden">
                            <h2 class="text-center text-gray-700">Earn money with<span class="text-primary"> SABI</span> Ride</h2>
                            <div class="flex item-center justify-center gap-5 mt-5">
                                <a href="" class="bg-primary text-sm text-white shadow-xl rounded-full p-4 w-32 text-center">Driver</a>
                                <a href="" class="text-primary text-sm bg-white shadow-xl border border-gray-100 w-40 text-center rounded-full p-4">Dispatch Rider</a>
                            </div>
                        </div>
                        <div class="flex gap-2 items-baseline">
                            <div class="steps">1</div>
                            <div>
                                <h5 class="text-gray-700">Drive more, earn more.</h5>
                                <p class="mt-2 text-sm text-gray-500 leading-5">With a large number of requests coming daily, you stand to get more.</p>
                            </div>
                        </div>
                        <div class="flex gap-2 items-baseline">
                            <div class="steps">2</div>
                            <div>
                                <h5 class="text-gray-700">Drive according to your schedule.</h5>
                                <p class="mt-2 text-sm text-gray-500 leading-5">Go online and offline whenever you want, because you rule your schedule.</p>
                            </div>
                        </div>

                        <div class="flex gap-2 items-baseline">
                            <div class="steps">3</div>
                            <div>
                                <h5 class="text-gray-700">Daily payouts.</h5>
                                <p class="mt-2 text-sm text-gray-500 leading-5">Do not wait for a weekly or monthly paycheck, Get it daily as you drive.</p>
                            </div>
                        </div>
                    </div>
                </div>
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

            <section class="mt-20">
                <div class="flex items-center justify-between">
                    <h2 class="font-bold text-gray-700">News and updates</h2>
                    <div class="flex items-center gap-2 text-sm">
                        <p>View all</p>
                        <x-svg.chevron-right size="14" />
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 md:grid-cols-3">
                    <div>
                        <img src="{{ asset('images/sections/blog.png') }}" alt="" class="w-full h-44 rounded-2xl">
                        <h5 class="mt-3 text-gray-700">The 2020 Guide for White Men in Tech</h5>
                    </div>
                </div>
            </section>
        </x-body>
    </main>
</x-home-layout>