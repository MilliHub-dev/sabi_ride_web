<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;


new #[layout('layouts.home')] class extends Component
{

    public function mount()
    {
    }
}; 
?>

<div>
    <x-verification.navigation />
    <div class="my-14 w-full">
        <x-body>
            <h1 class="font-bold">Terms & Conditions</h1>
        </x-body>
    </div>
    <x-body>
        <div class="flex gap-2 items-center">
            <a href="{{ route('general.terms') }}" class="border p-5 md:p-8 rounded-2xl bg-gray-50 max-w-full md:max-w-72">
                <b>General</b>
                <div class="mt-2 text-sm opacity-80">
                    General terms of use
                </div>
            </a>

            <a href="{{ route('drivers.terms') }}" class="border p-5 md:p-8 rounded-2xl bg-gray-50 max-w-full md:max-w-72">
                <b>Drivers</b>
                <div class="mt-2 text-sm opacity-80">
                    Terms of use for drivers
                </div>
            </a>
            
            <a href="{{ route('riders.terms') }}" class="border p-5 md:p-8 rounded-2xl bg-gray-50 max-w-full md:max-w-72">
                <b>Riders</b>
                <div class="mt-2 text-sm opacity-80">
                    Terms of use for riders
                </div>
            </a>
        </div>
    </x-body>
</div>