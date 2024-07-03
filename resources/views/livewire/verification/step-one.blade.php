<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\VehicleDetails;


new #[layout('layouts.verification')] class extends Component
{
    public VehicleDetails $form;
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
        session()->put('vehicle_details', $this->form->all());
        $this->dispatch('update-step');
    }
}; 
?>

<div>
    <div class="bg-white my-5 p-5 md:p-10 md:pt-7 rounded-xl border" x-data="{ imagePreview: '',showSvg:true}">
        <div class="pb-3 border-b-2 mb-3">
            <h3>Vehicle Details</h2>
        </div>
        <form wire:submit='savePersonalDetails' class="mt-7">

            {{-- <div class="mt-5">
                <x-input-label>Driver Type <span class="text-red-600">*</span></x-input-label>
                <x-select-input wire:model="form.driver_type" :values="['Car Driver', 'Dispatch']" content="Select a Type"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.driver_type')" class="mt-2" />
            </div> --}}

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
                <x-input-label>Vehicle manufacturer <span class="text-red-600">*</span></x-input-label>
                <x-select-input wire:model="form.vehicle_manufacturer" :values="$manufacturers" content="Select a manufacturer"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.vehicle_manufacturer')" class="mt-2" />
            </div>

            <div class="mt-5">
                <x-input-label>Vehicle Year <span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="form.vehicle_year" name="vehicle_year" class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.vehicle_year')" class="mt-2" />
            </div>

            <div class="mt-10 flex justify-end">
                <x-primary-button content="Proceed" target="savePersonalDetails" />
            </div>
        </form>
    </div>
</div>