<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\SignupForm;


new class extends Component 
{
    public string $status = '';
    public SignupForm $form;
    public array $code = [];
    

    public function mount($status)
    {
        $this->status = $status;
    }

    public function register()
    {
        // $validated = $this->validate();
        // $validated['passowrd'] = Hash::make($validated['password']);
        // DB::table('signup')->insert($validated);
        $this->redirectRoute('verify.account');
    }

    public function resendCode()
    {
        $this->redirectRoute('verify.account');
    }


    public function verifyCode()
    {
        $this->redirectRoute('application.verification');
    }
}; 
?>

<div>
    @if ($status === 'register')
        <form wire:submit='register'>
            
            <div class="mt-5">
                <h4 class="text-gray-600">Email</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.email' placeholder="Enter your e-mail" />   
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>
            
            <div class="mt-5">
                <h4 class="text-gray-600">Phone number</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.phone_number' placeholder="Enter phone number" />   
                <x-input-error :messages="$errors->get('form.phone_number')" class="mt-2" />
            </div>

            <div class="mt-5">
                <h4 class="text-gray-600">City</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.location_city' placeholder="City where you drive" />   
                <x-input-error :messages="$errors->get('form.location_city')" class="mt-2" />
            </div>

            <div class="mt-5">
                <h4 class="text-gray-600">Password</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.password' placeholder="Enter your password" /> 
                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />  
            </div>
            <div class="mt-10">
                <x-checkbox required name="terms_of_use" model="form.terms_of_use">
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
    @endif
</div>