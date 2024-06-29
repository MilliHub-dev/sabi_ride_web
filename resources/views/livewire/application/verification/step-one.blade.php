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
        // $this->validate();
        $this->dispatch('step-one-complete');
    }
}; 
?>

<div>
    <div class="bg-white mt-5 p-5 md:p-10 md:pt-7 rounded-xl border" x-data="{ imagePreview: '',showSvg:true}">
        <div class="pb-3 border-b-2 mb-3">
            <h3>Personal Details</h2>
        </div>
        <form wire:submit='savePersonalDetails' class="mt-7">
            <div>
                <x-input-label>Full Name <span class="text-red-600">*</span></x-input-label>
                <x-text-input wire:model="form.name" name="name"  class="w-full mt-2"/>
                <x-input-error :messages="$errors->get('form.name')" class="mt-2" />
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


            <div class="mt-10">
                <x-primary-button content="Proceed" target="savePersonalDetails" />
            </div>
            {{-- <div class="my-3">
                <x-input-label>Agency Logo: <span class="text-red-600">*</span></x-input-label>

                <div class="border rounded-md h-16 inline-flex items-center justify-center pe-4">
                    <input type="file" wire:model="form.logo" accept="image/jpeg, image/png" id="fileInput" class="hidden" x-on:change="imagePreview = URL.createObjectURL($event.target.files[0]);showSvg=false">

                    <div class="size-16 rounded-l-md items-center flex px-5 bg-zinc-200 bg-cover bg-no-repeat bg-center rounded-sm" :style="{ backgroundImage: 'url(' + imagePreview + ')' }">
                        <svg xmlns="http://www.w3.org/2000/svg" x-show="showSvg" width="26" height="26" fill="#918e8e" viewBox="0 0 16 16">
                            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12"/>
                        </svg>
                    </div>

                    <label for="fileInput" class="rounded-full h-8 shrink-0 ms-3 flex cursor-pointer bg-blue-100 hover:bg-blue-200 delay-75 transition-all ease-in hover:ease-out text-primary items-center justify-center">
                        <p class="text-xs font-semibold px-3">Upload logo of your agency</p>
                        <div class="bg-blue-400 size-8 rounded-full flex items-center justify-center shrink-0 text-blue-700">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M.002 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-12a2 2 0 0 1-2-2V3zm1 9v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12zm5-6.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
                            </svg>
                        </div>
                    </label>
                </div>
                <x-input-error :messages="$errors->get('form.logo')" class="mt-2" />

                <div class="mt-5">
                    <x-input-error :messages="$errors->get('term_and_policy')" class="mt-2" />

                    @if (! auth()->user())
                        <div class="mt-7">
                            <button class="bg-zinc-900 rounded-lg uppercase p-4 text-sm text-white hover:bg-zinc-700 ease-in delay-75 transition-all hover:ease-out"
                            @click='$wire.next(); smoothScroll("#main", 500)'>enter personal details</button>

                            <div class=" clear-both"></div>
                        </div>
                    @else
                        <x-button content="Procced with application" type="button" target="store" wire:click='store' extra="mt-5 w-auto inline-block" class="py-5 float-left justify-center"/>
                    @endif
                </div>
            </div> --}}
            
        </form>

    </div>
</div>