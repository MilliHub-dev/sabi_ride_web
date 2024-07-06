<?php

use Livewire\Volt\Component;
use App\Livewire\Forms\LoginForm;
use Livewire\Attributes\Layout;


new #[layout('layouts.guest')] class extends Component
{
    public LoginForm $form;
    
    public function mount()
    {
        if(session('user')) {
            $this->redirectRoute('verification.start');
            return;
        }
    }

    public function login()
    {
        $response = $this->form->authenticate();

        if ( is_string($response) && str_contains($response, "user is not activated")) {
            session()->put('email', $this->form->all()['email']);
            $this->redirectRoute('verify.account');
            return;
        }
        session()->put('user', $response);

        $this->redirectRoute('verification.start');

    }

}; 
?>

<div class="w-full mx-auto max-w-md">
    <div class="p-8 py-2 sm:p-0 justify-end flex w-full">
        <a href="{{ route('driver') }}" class="border shadow-md float-end rounded-full size-14 flex items-center justify-center transition duration-150 ease-in-out" >
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </a>
        <div class="clear-both"></div>
    </div>
    <div class="sm:p-10 sm:border sm:min-h-[700px] p-8 sm:mt-5 rounded-3xl sm:shadow-md block sm:border-gray-200 w-full">
        <div class="center mb-5">
            <x-application-logo />
        </div>
        <h3>Sign In</h3>
        <form wire:submit='login'>
            <div class="mt-5">
                <h4 class="text-gray-600">Email</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="email" wire:model='form.email' placeholder="Enter your e-mail" />   
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>

            <div class="mt-5 w-full">
                <h4 class="text-gray-600">Password</h4>      
                <x-text-input class="w-full mt-2 bg-zinc-50" type="password" wire:model='form.password' placeholder="Enter your password" /> 
                <x-input-error :messages="$errors->get('form.password')" class="mt-2" />  
            </div>
            <div class="center flex-col mt-10 w-full">
                <x-primary-button target="login" content="Sign In"/>
                <a href="{{ route('signup') }}" class="mt-3 underline text-sm text-zinc-800">Don't have an account?</a>
            </div>
        </form>
    </div>
</div>