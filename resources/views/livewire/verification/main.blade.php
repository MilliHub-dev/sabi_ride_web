<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;


new #[layout('layouts.verification')] class extends Component
{
    public int $step;

    public function mount()
    {
        $this->manufacturers = [
            'toyota', 'ford', 'chevrolet', 'honda', 'nissan', 'bmw', 'mercedes-benz', 'audi', 'volkswagen',
            'hyundai', 'kia', 'subaru', 'mazda', 'lexus', 'acura', 'infiniti', 'volvo', 'tesla', 'mitsubishi',
            'cadillac', 'chrysler', 'gmc', 'lincoln', 'alfa-romeo'
        ];

        $this->colors = [
            'red', 'blue', 'green', 'black', 'white', 'silver', 'gray', 'yellow', 'orange', 'brown', 'purple'
        ];

        $this->getStep();
    }

    public function getStep()
    {
        if(session('personal_details') && session('licensing_details')) {

            $this->step = 3;
        } elseif (session('personal_details') && !session('licensing_details')) {

            $this->step = 2;
        } else {

            $this->step = 1;
        }
    }


}; 
?>

<div>
    <div class="w-full min-h-[13rem] md:min-h-36 p-4 bg-white flex flex-col shadow-sm justify-center">
        <div class="max-w-5xl w-full mx-auto text-center">
            <h1 class="text-4xl font-semibold text-black">
                Register as a driver
            </h1>
            @if (!auth()->user())
                <p class="mt-4">Already have an account <span class="text-primary" wire:click='redirectToSignIn'>Log in here</span></p>
            @endif
        </div>
    </div>



    <div class="max-w-3xl mx-auto">
        <x-steps :step="$step" />
        @if ($step === 1)
            <livewire:verification.step-one>
        
        @elseif ($step === 2)
            <livewire:verification.step-two>

        @elseif ($step === 3)
            <livewire:verification.step-three>

        @endif
    </div>

</div>