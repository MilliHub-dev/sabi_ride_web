<footer class="bg-blue-100 mt-20">
    <x-body>
        <div class="flex w-full h-full flex-col py-8 md:py-10 justify-between">
            <div>
                <div class="flex items-center justify-between">
                    <h4 class="text-gray-700 italic">SABI RIDE</h4>
                    <img src="{{ asset('images/sections/car_tie.png') }}" alt="" class="h-20">
                </div>
    
                <div class="grid grid-cols-2 md:grid-cols-4 mt-10 text-xs text-gray-600">
                    <div class="space-y-4">
                        <h6 class="text-gray-700">Contact Us</h6>
                        <p>info.sabiride@gmail.com</p>
                        <p>+2349126092569</p>
                        <p>Abuja, Nigeria</p>
                        <div class="flex items-center text-[#304659] mt-5 gap-3">
                            <a href="https://www.facebook.com/profile.php?id=61553823904645">
                                <x-svg.facebook size="30" />
                            </a>
                            <a href="https://www.linkedin.com/company/sabi-ride/">
                                <x-svg.linkedin size="30" />
                            </a>
                            <a href="https://www.instagram.com/sabiride.ng?igsh=MXNnaHBqbjB4YTJtcQ==">
                                <x-svg.instagram size="30" />
                            </a>
                            <a href="https://x.com/SabiRide?t=NARV6qzuIOxHA2nXPr0wMw&s=09">
                                <x-svg.twitter size="30" />
                            </a>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <h6 class="text-gray-700">Products</h6>
                        <a href="" class="block">Rides</a>
                        <a href="" class="block">Food Delivery</a>
                        <a href="" class="block">Grocery Delivery</a>
                        <a href="" class="block">Sabi Business</a>
                        <a href="" class="block">Sign Up as Driver/Rider</a>
                        <a href="" class="block font-semibold">Get app</a>
                    </div>
    
                    <div>
                        <div class="space-y-4">
                            <h6 class="text-gray-700">Company</h6>
                            <a href="" class="block">About Us</a>
                            <a href="" class="block">News and updates</a>
                            <a href="" class="block">Brand guidelines</a>
                        </div>
                        <div class="bg-black/90 p-1 px-4 rounded md inline-block mt-5">
                            <img src="{{ asset('images/sections/app_store.png') }}" class="h-5" alt="apple store">
                        </div>
                    </div>
    
                    <div>
                        <div class="space-y-4">
                            <h6 class="text-gray-700">Newsletter</h6>
                            <a href="" class="block">News and updates</a>
                            <a href="" class="block">Unsubscribe</a>
                            <a href="" class="block">Subscribe</a>
                        </div>
        
                        <div class="bg-black/90 p-1 px-4 rounded md inline-block mt-5">
                            <img src="{{ asset('images/sections/play_store.png') }}" class="h-5" alt="play store">
                        </div>
                    </div>
                </div>
            </div>


            <div class="text-zinc-500 text-xs w-full border-t mt-10 border-blue-200 pt-3">
                <div class="flex items-center gap-1">
                    <p class="text-zinc-700"><x-svg.globe /></p>
                    <p>English</p>
                </div>
                <p class="mt-3">Copyright © 2024. All rights reserved.</p>
            </div>
        </div>
    </x-body>
</footer>