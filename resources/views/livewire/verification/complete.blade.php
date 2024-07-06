<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[layout('layouts.verification')] class extends Component
{
    public string $status = '';
    public function mount ()
    {
        if(!session('user')) {
            $this->redirectRoute('login');
            return;
        }
        $this->status = session('verification_status');
    }
}; 
?>

<div>
    <div class="w-full min-h-[13rem] md:min-h-36 p-4 bg-white flex flex-col shadow-sm justify-center">
        <div class="max-w-5xl w-full mx-auto text-center">
            <h1 class="text-4xl font-semibold text-black">
                Register as a driver
            </h1>
        </div>
    </div>

    <div class="max-w-3xl mx-auto">
        <div class="bg-white mt-5 p-5 md:p-10 md:pt-7 rounded-xl border" x-data="{ imagePreview: '',showSvg:true}">
            <div class="pb-3 border-b-2 mb-3">
                <h3>Verification Complete</h2>
                    <p class="text-zinc-600 mt-2">Your Documents are under review.</p>
            </div>
            <div class="mt-3">
                <p> Thanks for your Registration! Your submission has been received.
                    Once your documents has been verified, you’ll receive an
                    invitation by email for the location of your vehicle inspection.</p>
                <p class="mt-3">Your verification status is: {{ strlen($status) > 2 ? $status : 'Pending' }}</p>
            </div>
            <div class="mt-5">
                <a href="/" class="text-white text-sm bg-primary rounded-full p-3 px-6 font-semibold">Go Home</a>
            </div>

        </div>
    </div>
</div>