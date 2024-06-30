<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\SignupForm;
use Illuminate\Support\Facades\DB;


new class extends Component 
{
    public SignupForm $form;
    public array $code = [];
    

    public function register()
    {
        $validated = $this->validate();
        $validated['passowrd'] = Hash::make($validated['password']);
        // if (! DB::table('signup')->where('email', $validated['email'])->exists()) {
        //     DB::table('signup')->insert($validated);
        // }
        $this->form->sendVerificationSms();
        session()->put('id');
        $this->redirectRoute('verify.account');
    }
}; 
?>

<div>
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
            <x-text-input class="w-full mt-2 bg-zinc-50" type="password" wire:model='form.password' placeholder="Enter your password" /> 
            <x-input-error :messages="$errors->get('form.password')" class="mt-2" />  
        </div>
        <div class="mt-10">
            <x-checkbox required name="terms_of_use" model="form.terms_of_use">
                <p class="text-gray-500">By signing up, you agree to our <a href="" class="text-blue-400">Terms and Conditions</a> and confirm that you have read and understood the <a href=""  class="text-blue-400">Privacy Policy</a> for Drivers.</p>
            </x-checkbox>
        </div>
        <div class="center flex-col mt-10">
            <x-primary-button target="register" content="Sign up as SABI driver"/>
            <a href="{{ route('login') }}" class="mt-3 underline text-sm text-zinc-800">Already have an account?</a>
        </div>
    </form>
</div>