<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;



new #[layout('layouts.verification')] class extends Component
{
    #[Validate('required|numeric')]
    public int $driver_license_number;
    #[Validate('required|date')]
    public $driver_license_expiry;
    

    public function saveLicensingDetails()
    {
        $this->validate();
        $form = [
            'driver_license_number' => $this->driver_license_number,
            'driver_license_expiry' => $this->driver_license_expiry,
        ];
        session()->put('licensing_details', $form);
        $this->dispatch('update-step');
    }
}; 
?>

<div>
    <div class="bg-white mt-5 p-5 md:p-10 md:pt-7 rounded-xl border" x-data="{ imagePreview: '',showSvg:true}">
        <div class="pb-3 border-b-2 mb-3">
            <h3>Private and licensing details</h2>
        </div>
        <form wire:submit='saveLicensingDetails' class="mt-7">
            <div>
                <x-input-label>License Number <span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="driver_license_number" name="driver_license_number" type="number"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('driver_license_number')" class="mt-2" />
            </div>

            <div class="mt-7">
                <x-input-label>Driver License Expiry Date<span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="driver_license_expiry" type="date" name="driver_license_expiry"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('driver_license_expiry')" class="mt-2" />
            </div>
            
            <div class="mt-10 flex justify-end">
                <x-primary-button content="Proceed" target="savePersonalDetails" />
            </div>
        </form>
    </div>
</div>