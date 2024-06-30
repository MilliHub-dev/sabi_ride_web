<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\SignupForm;
use Livewire\Attributes\Layout;
use Tzsk\Otp\Facades\Otp;


new #[layout('layouts.guest')] class extends Component
{
    public array $code = [];


    
    public function matchCode()
    {
        $this->validate([
            'code' => 'required|numeric|min:6'
        ]);

        if (Otp::match($this->code, $this->user->email)) {
            $this->user->update([
                'email_verified_at' => now()
            ]);
            $this->redirectRoute('user.dashboard');
        }else{
            $this->addError('code', 'Invalid Code');
        }
    }


    public function resendCode()
    {
        $otp = Otp::digits(6)->generate($this->user->email);
        flash('info', 'Code Resent.');
        $this->redirect(
            route('verification.notice'),
             navigate:true
        );
    }


    public function verifyCode()
    {
        $this->redirectRoute('verification.start');
    }
}; 
?>

<div>
    <div class="max-w-md">
        <div class="p-8 py-2 sm:p-0 justify-end flex">
            <a href="{{ route('driver') }}" class="border shadow-md float-end rounded-full size-14 flex items-center justify-center transition duration-150 ease-in-out" >
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
            <div class="clear-both"></div>
        </div>
        <div class="sm:p-10 sm:border sm:min-h-[700px] p-8 sm:mt-5 rounded-3xl sm:shadow-md sm:border-gray-200 w-full">
            <div class="center mb-5">
                <x-application-logo />
            </div>
            <h3>Verification Code</h3>
            <p class="my-3 sm:my-5 text-gray-600">Enter the Verification code sent to your phone</p>
            <div class="mt-10">
                <form wire:submit='verifyCode' autocomplete="off" >
                    <div x-data="{ code: @js($code) }" class="flex flex-col items-center">
                        <div class="flex justify-between w-full">
                            @for($i = 0; $i < 4; $i++)
                                <input type="text" maxlength="1" wire:model.live="code.{{ $i }}" 
                                    @input="if ($event.target.value && {{ $i }} < 3) $refs.input{{ $i + 1 }}.focus()"
                                    @keydown.backspace="if ($event.target.value === '' && {{ $i }} > 0) $refs['input' + ({{ $i }} - 1)].focus()"
                                    class="size-16 rounded-full text-center text-2xl border border-gray-300 outline-primary" 
                                    autocomplete="verification_code"
                                    x-ref="input{{ $i }}"
                                >
                            @endfor
                        </div>
                    </div>
                    <div class="flex justify-end items-center mt-2">
                        <p class="text-primary cursor-pointer text-sm font-semibold" wire:click='resendCode'>Resend code now</p>
                    </div>            
                    <div class="center mt-10">
                        <x-primary-button target="verifyCode" content="Verify" extra="w-full"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>