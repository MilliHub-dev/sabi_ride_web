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
    <div class="h-44 bg-primary w-full center">
        <h1 class="font-bold">About SabiRide</h1>
    </div>
    <x-body>
        <div class="border mt-10 p-5 md:p-8 rounded-2xl bg-gray-50 w-full">
            <h2>What are we</h2>
            <div class="mt-5 text-sm opacity-80">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, porro totam ullam, accusamus minima eaque deleniti numquam minus recusandae ducimus earum. Magnam et ea exercitationem, ut similique voluptas esse nulla. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil, porro totam ullam, accusamus minima eaque deleniti numquam minus recusandae ducimus earum. Magnam et ea exercitationem, ut similique voluptas esse nulla.
            </div>
        </div>
    </x-body>
</div>