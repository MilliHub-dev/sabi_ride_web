<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\SignupForm;
use Illuminate\Support\Facades\DB;


new class extends Component 
{
    public SignupForm $form;
    public array $code = [];
    
    public function mount()
    {
        if(session('user')) {
            $this->redirectRoute('verification.start');
            return;
        }
    }
    

    public function register()
    {
        $this->validate();        
        $this->form->register();
        flash('success', 'sign up success, please login');
        $this->redirectRoute('login');
    }
}; 
?>

<div>
    <form wire:submit='register'>
        
        <div class="grid grid-cols-2 gap-2">
            <div class="mt-5">
                <h4 class="text-gray-600">First Name</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.first_name' placeholder="Enter first name" />   
                <x-input-error :messages="$errors->get('form.first_name')" class="mt-2" />
            </div>
    
            <div class="mt-5">
                <h4 class="text-gray-600">Last Name</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.last_name' placeholder="Enter last name" />   
                <x-input-error :messages="$errors->get('form.last_name')" class="mt-2" />
            </div>
        </div>

        <div class="mt-5">
            <h4 class="text-gray-600">Emaill Address</h4>      
            <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.email' placeholder="Enter your email" />   
            <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
        </div>
        
        <div class="mt-5">
            <h4 class="text-gray-600">Phone number</h4>      
            <x-text-input class="w-full mt-2 bg-zinc-50" type="text" wire:model='form.phone_number' placeholder="Enter phone number" />   
            <x-input-error :messages="$errors->get('form.phone_number')" class="mt-2" />
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