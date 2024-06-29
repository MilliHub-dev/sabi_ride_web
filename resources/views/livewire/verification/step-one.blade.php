<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\PersonalDetails;


new #[layout('layouts.verification')] class extends Component
{
    public PersonalDetails $form;
    public array $manufacturers = [];
    public array $colors = [];

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
    }

    public function savePersonalDetails()
    {
        $this->validate();
        session()->put('personal_details', $this->form->all());
        $this->dispatch('update-step');
    }
}; 
?>

<div>
    <div class="bg-white mt-5 p-5 md:p-10 md:pt-7 rounded-xl border" x-data="{ imagePreview: '',showSvg:true}">
        <div class="pb-3 border-b-2 mb-3">
            <h3>Personal Details</h2>
        </div>
        <form wire:submit='savePersonalDetails' class="mt-7">
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <x-input-label>First Name <span class="text-red-600">*</span></x-input-label>
                    <x-text-input wire:model="form.first_name" name="first_name"  class="w-full mt-2"/>
                    <x-input-error :messages="$errors->get('form.first_name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label>Last Name <span class="text-red-600">*</span></x-input-label>
                    <x-text-input wire:model="form.last_name" name="last_name"  class="w-full mt-2"/>
                    <x-input-error :messages="$errors->get('form.last_name')" class="mt-2" />
                </div>
            </div>

            <div class="mt-5">
                <x-input-label>Middle Name <span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="form.middle_name" name="middle_name"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.middle_name')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label>Email Address <span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="form.email" name="email" class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.email')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label>Gender <span class="text-red-600">*</span></x-input-label>
                <x-select-input wire:model="form.gender" :values="['male', 'female']" content="Select a gender"  class="w-ful mt-2"/>
                <x-input-error :messages="$errors->get('form.gender')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label class="inline-block">Referral Code</x-input-label>
                <span>(optional)</span>
                <x-text-input wire:model="form.referral_code" name="referral_code" class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.referral_code')" class="mt-2" />
            </div>

            <div class="mt-5 grid sm:grid-cols-2 gap-2">
                <div>
                    <x-input-label>Driver Type <span class="text-red-600">*</span></x-input-label>
                    <x-select-input wire:model="form.driver_type" :values="['Car Driver', 'Dispatch']" content="Select a Type"  class="w-full mt-2"/>
                    <x-input-error :messages="$errors->get('form.driver_type')" class="mt-2" />
                </div>

                <div>
                    <x-input-label>License Plate <span class="text-red-600">*</span></x-input-label>
                    <x-text-input wire:model="form.license_plate" name="license_plate" class="w-full mt-2"/>
                    <x-input-error :messages="$errors->get('form.license_plate')" class="mt-2" />
                </div>
            </div>

            <div class="mt-5">
                <x-input-label>Vehicle manufacturer <span class="text-red-600">*</span></x-input-label>
                <x-select-input wire:model="form.vehicle_manufacturer" :values="$manufacturers" content="Select a manufacturer"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.vehicle_manufacturer')" class="mt-2" />
            </div>

            <div class="grid sm:grid-cols-2 gap-2 mt-7">
                <div>
                    <x-input-label>Vehicle Model <span class="text-red-600">*</span></x-input-label>
                    <x-text-input wire:model="form.vehicle_model" name="vehicle_model" class="w-full mt-2"/>
                    <x-input-error :messages="$errors->get('form.vehicle_model')" class="mt-2" />
                </div>
    
                <div>
                    <x-input-label>Vehicle Color <span class="text-red-600">*</span></x-input-label>
                    <x-select-input wire:model="form.vehicle_color" :values="$colors" content="Select a color"  class="w-full mt-2"/>
                    <x-input-error :messages="$errors->get('form.vehicle_color')" class="mt-2" />
                </div>
            </div>

            <div class="mt-5">
                <x-input-label>Vehicle Year <span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="form.vehicle_year" name="vehicle_model" class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.vehicle_year')" class="mt-2" />
            </div>


            <div class="mt-10">
                <x-primary-button content="Proceed" target="savePersonalDetails" />
            </div>
        </form>
    </div>
</div>