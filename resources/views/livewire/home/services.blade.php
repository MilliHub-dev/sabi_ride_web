<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;


new #[layout('layouts.home')] class extends Component
{
    public array $services = [];

    public function mount()
    {
        $this->services = [
            [
                'title' => 'Ride Hailing',
                'description' => 'Ride-hailing is a transportation service that allows passengers to request a ride from a location using a mobile app, connecting them with drivers who use their own vehicles to provide the service',
                'svg' => 'ride'
            ],
            [
                'title' => 'Dispatch',
                'description' => 'Dispatch ride refers to the process of assigning and coordinating the pickup and delivery of goods or passengers to specific vehicles or drivers within a transportation or ride-hailing service.',
                'svg' => 'dispatch'
            ],
            [
                'title' => 'Food delivery',
                'description' => 'A Food ride refers to a premium or exclusive transportation service designed to provide a higher level of comfort, luxury, and personalized experience to passengers, often at a premium price.',
                'svg' => 'food'
            ],
            [
                'title' => 'VIP Ride',
                'description' => 'A VIP ride refers to a premium or exclusive transportation service designed to provide a higher level of comfort, luxury, and personalized experience to passengers, often at a premium price.',
                'svg' => 'vip'
            ],
            [
                'title' => 'Groceries',
                'description' => 'Food delivery is the service of bringing prepared meals, groceries, or restaurant dishes directly to a customer\'s specified location, typically using a delivery driver or courier.',
                'svg' => 'groceries'
            ],
            [
                'title' => 'Ride Sharing',
                'description' => 'Sabi Ride Sharing your reliable ride-sharing companion. Whether you\'re commuting to work, heading to a social event, or exploring the city, Sabi Ride offers a seamless, convenient, and affordable way to get around.',
                'svg' => 'share'
            ],
        ];
    }
}; 
?>

<div>
    <x-verification.navigation />
    <div class="bg-white py-10">
        <div class="max-w-6xl px-4 mx-auto">
            <h1 class="text-3xl md:text-4xl text-center text-blue-950 font-semibold pt-3">Services</h1>
            <p class="text-blue-950/70 mt-1 text-center">Keep track of the happens in the crypto world</p>
            <div class="h-full w-full overflow-hidden rounded-2xl md:bg-blue-50 mt-10 space-y-6 md:space-y-0 md:grid md:grid-cols-2 gap-1 lg:grid-cols-3">
                
                @foreach ($services as $key => $service)
                    <div class="
                        {{ ($key + 1) % 2 == 0 ? 'md:border-r-0' : '' }}
                        {{ ($key + 1) % 3 == 0 ? 'lg:border-r-0' : 'lg:border-r' }}
                        p-5 md:p-10 bg-blue-50 rounded-2xl border-r md:bg-transparent md:rounded-none
                    ">
                        <div class="bg-blue-100 rounded-2xl md:h-52 center pt-10">
                            @include('components.svg.home.' . $service['svg'])
                        </div>
                        <div class="mt-7">
                            <h4 class="text-3xl font-semibold text-blue-950">{{ $service['title'] }}</h4>
                            <p class="text-zinc-600 text-sm mt-3">{{ $service['description'] }}</p>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
</div>