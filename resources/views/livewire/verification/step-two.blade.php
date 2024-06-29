<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;



new #[layout('layouts.verification')] class extends Component
{
    #[Validate('required|numeric')]
    public int $license_number;
    #[Validate('required|date')]
    public DateTime $license_expiry_date;
    

    public function saveLicensingDetails()
    {
        $this->validate();
        session()->put('licensing_details', $form);
        $this->dispatch('step-two-complete');
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
                <x-text-input wire:model="license_number" name="license_number" type="number"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('license_number')" class="mt-2" />
            </div>

            <div class="mt-7">
                <x-input-label>Driver License Expiry Date<span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="license_expiry_date" type="date" name="license_expiry_date"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('license_expiry_date')" class="mt-2" />
            </div>
            
            <div class="mt-10 flex justify-end">
                <x-primary-button content="Proceed" target="savePersonalDetails" />
            </div>
        </form>
    </div>
</div>