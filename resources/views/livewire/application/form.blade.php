<?php

use Livewire\Volt\Component;

new class extends Component 
{
    public string $status = '';
    public array $form = [];
    public array $code = [];
    public function mount($status)
    {
        $this->status = $status;
    }

    public function register()
    {
        sleep(2);
        $this->redirectRoute('driver.application.verify');
    }

    public function resendCode()
    {
        sleep(2);
        $this->redirectRoute('driver.application.verify');
    }


    public function verifyCode()
    {
        dd(implode($this->code));
    }
}; 
?>

<div>
    @if ($status === 'register')
        <form wire:submit='register'>
            <div>
                <h4 class="text-gray-600">Full Name</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" placeholder="Enter your name" />   
            </div>   
            
            <div class="mt-7">
                <h4 class="text-gray-600 bg-zinc-50">Email or phone number</h4>      
                <x-text-input class="w-full mt-2" type="text" placeholder="Enter your e-mail or phone number" />   
            </div>
            <div class="mt-7">
                <h4 class="text-gray-600">Password</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" placeholder="Enter your password" />   
            </div>
            <div class="mt-10">
                <x-checkbox name="terms_of_use" model="form.terms_of_use">
                    <p class="text-gray-500">By signing up, you agree to our <a href="" class="text-blue-400">Terms and Conditions</a> and confirm that you have read and understood the <a href=""  class="text-blue-400">Privacy Policy</a> for Drivers.</p>
                </x-checkbox>
            </div>
            <div class="center mt-10">
                <x-primary-button target="register" content="Sign up as SABI driver"/>
            </div>
        </form>
    @else
        <form wire:submit='verifyCode' autocomplete="off" >
            <div x-data="{ code: @js($code) }" class="flex flex-col items-center">
                <div class="flex justify-between w-full">
                    @for($i = 0; $i < 4; $i++)

                        <input type="text" maxlength="1" wire:model.live="code.{{ $i }}" 
                            @input="if ($event.target.value && {{ $i }} < 3) $refs.input{{ $i + 1 }}.focus()"
                            @keydown.backspace="if ($event.target.value === '' && {{ $i }} > 0) $refs.input{{ $i - 1 }}.focus()"
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
            <div class="center mt-5">
                <x-primary-button target="verifyCode" content="Verify" extra="w-full"/>
            </div>
        </form>
    @endif
</div>