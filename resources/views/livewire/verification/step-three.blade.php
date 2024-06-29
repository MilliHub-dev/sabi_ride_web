<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use App\Livewire\Forms\DocumentsUpload;
use Livewire\WithFileUploads;

new #[layout('layouts.verification')] class extends Component
{
    use WithFileUploads;

    public array $requiredDocumentsArray = [];
    public array $extraDocumentsArray = [];
    public array $photos = [];

    public function rules()
    { 
        return [
            'photos.driver_license' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.driver_profile_photo' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.car_exterior_photo' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.car_interior_photo' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.vehicle_license_certificate' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.road_worthiness_certificate' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.government_issued_id' => 'required|file|mimes:jpeg,png|max:2048',
            'photos.proof_of_ownership_certificate' => 'required|file|mimes:jpeg,png|max:2048',
        ];
    }

    public function validationAttributes()
    { 
        return [
            'photos.driver_license' => 'driver license',
            'photos.driver_profile_photo' => 'driver profile photo',
            'photos.car_exterior_photo' => 'car exterior photo',
            'photos.car_interior_photo' => 'car interior photo',
            'photos.vehicle_license_certificate' => 'vehicle license certificate',
            'photos.road_worthiness_certificate' => 'road worthiness certificate',
            'photos.government_issued_id' => 'government issued ID',
            'photos.proof_of_ownership_certificate' => 'proof of ownership certificate',
        ];
    }

    protected function requiredDocuments()
    {
        return [
            [
                "name" => "Driver's License",
                "description" => "Please provide a clear driver's license showing the license number, your name, and date of birth.",
                "model" => "photos.driver_license"
            ],
            [
                "name" => "Driver's Profile Photo",
                "description" => "Provide a clear portrait picture (just your head) of yourself. Should show your full face, front view, with eyes open",
                "model" => "photos.driver_profile_photo"
            ],
            [
                "name" => "Exterior Photo of the Car",
                "description" => "Upload a clear exterior photo that captures the plate number. Visit Sample Exterior Photo.",
                "model" => "photos.car_exterior_photo"
            ],
            [
                "name" => "Interior Photo of the Car",
                "description" => "Provide a clear interior photo of your car. Visit Sample Interior Photo.",
                "model" => "photos.car_interior_photo"
            ],
            [
                "name" => "Vehicle License Certificate",
                "description" => "Upload the vehicle license document of the car.",
                "model" => "photos.vehicle_license_certificate"
            ],
            [
                "name" => "Certificate of Roadworthiness",
                "description" => "Picture of Roadworthiness Certificate.",
                "model" => "photos.road_worthiness_certificate"
            ],
            [
                "name" => "Government Issued ID",
                "description" => "Upload any government-issued ID: NIN slip, National ID card Or Passport, Permanent Voter's Card, Driver's License.",
                "model" => "photos.government_issued_id"
            ],
            [
                "name" => "Proof of Car Ownership Certificate",
                "description" => "Upload proof of ownership of the car, such as the car's title document or any certificate that verifies you as the owner.",
                "model" => "photos.proof_of_ownership_certificate"
            ]
        ];
    }

    protected function extraDocuments()
    {
        return [
            [
                "name" => "Screenshot of Dashboard",
                "model" => "photos.screenshot_of_dashboard"
            ],
            [
                "name" => "Screenshot of rating with reviews",
                "model" => "photos.screenshot_of_rating_with_reviews"
            ],
            [
                "name" => "Screenshot of Notification screen",
                "model" => "photos.screenshot_of_notification_screen"
            ]
        ];
    }

    public function mount()
    {
        $this->requiredDocumentsArray = $this->requiredDocuments();
        $this->extraDocumentsArray = $this->extraDocuments();
    }

    public function validateAndProceed()
    {
        $this->validate();
        $this->dispatch('open-modal');
    }

    public function saveLicensingDetails()
    {
        $photosPath = [];
        foreach ($this->photos as $name => $photo) {
            if (!is_null($photo)) {
                $photosPath[$name] = $photo->store(path: 'verification/documents');
            }
        }
        session()->put('documents', $photosPath);
        $this->dispatch('save-driver');
    }

}; 
?>

<div class="pb-20" x-data="{ showModal:false }" @open-modal="showModal = true">
    <div class="bg-white mt-5 p-5 md:p-10 md:pt-7 rounded-xl border">
        <div class="pb-3 border-b-2 mb-3">
            <h3>Upload Documents</h2>
        </div>
        <p>8 documents are required from you</p>
        <form wire:submit='saveLicensingDetails' class="mt-3">
            <div class="grid sm:grid-cols-2 gap-3">
                @foreach ($requiredDocumentsArray as $key => $item) 
                    <div class="mt-7" x-data="{ showImage{{ $key }}:false, imagePreview{{ $key }}: '' }">
                        <h4>{{ $item['name'] }}</h4>
                        <small class="text-zinc-500">{{ $item['description'] }}</small>
                        <div class="border w-full h-52 rounded-xl flex flex-col justify-between mt-3">
                            <input type="file" wire:model.live="{{ $item['model'] }}" accept="image/jpeg, image/png" id="{{ $item['model'] }}" class="hidden" x-on:change="imagePreview{{ $key }} = URL.createObjectURL($event.target.files[0]); showImage{{ $key }} = true">
                            <div class="h-full rounded-t-xl center text-zinc-400 bg-center bg-no-repeat bg-cover" :style="{ backgroundImage: 'url(' + imagePreview{{ $key }} + ')' }">
                                <div x-show="!showImage{{ $key }}">
                                    <x-svg.upload size="40" />
                                </div>
                            </div>
                            <div class="bg-zinc-100 rounded-b-xl h-16 border-t flex justify-end px-3">
                                <div class="flex gap-2 items-center">
                                    <label  x-show="!showImage{{ $key }}" for="{{ $item['model'] }}" class="rounded-full h-8 shrink-0 ms-3 flex cursor-pointer bg-blue-100 hover:bg-blue-200 delay-75 transition-all ease-in hover:ease-out text-primary items-center justify-center">
                                        <p class="text-xs font-semibold px-3">Click to upload</p>
                                        <div class="bg-blue-300 size-8 rounded-full center shrink-0 text-primary">
                                            <x-svg.image />
                                        </div>
                                    </label>
    
                                    <label for="{{ $item['model'] }}"  class="bg-zinc-700 cursor-pointer text-white size-8 rounded-full center shrink-0" x-show="showImage{{ $key }}">
                                        <x-svg.edit />
                                    </label>
                                </div>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get($item['model'])" class="mt-2" />
                    </div>
                @endforeach
            </div>
            <div class="flex justify-end mt-4">
                <div class="bg-primary rounded-full px-8 p-3 text-sm inline-block text-white cursor-pointer" @click="$wire.validateAndProceed()">Proceed</div>
            </div>

            <div class="mt-10 flex justify-end">
            </div>
            <x-modal>
                <p class="bg-blue-50 p-2 rounded-lg border border-blue-200 text-sm text-primary">If you have an account with any ride hailing platform fill in this section for faster verification if not leave it blank</p>
                <div>
                    @foreach ($extraDocumentsArray as $key => $item) 
                        <div class="mt-7" x-data="{ showImage{{ $key }}:false, imagePreview{{ $key }}: '' }">
                            <h6>{{ $item['name'] }}</h6>
                            <div class="border rounded-md h-16 flex items-center justify-between pe-4 mt-2">
                                <input type="file" wire:model.live="{{ $item['model'] }}" accept="image/jpeg, image/png" id="{{ $item['model'] }}" class="hidden" x-on:change="imagePreview{{ $key }} = URL.createObjectURL($event.target.files[0]); showImage{{ $key }} = true">        
                                <div class="size-16 rounded-l-md center px-5 bg-zinc-200 bg-cover bg-no-repeat bg-center rounded-sm" :style="{ backgroundImage: 'url(' + imagePreview{{ $key }} + ')' }">
                                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!showImage{{ $key }}" width="26" height="26" fill="#918e8e" viewBox="0 0 16 16">
                                        <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                        <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12"/>
                                    </svg>
                                </div>
    
                                <label for="{{ $item['model'] }}" class="rounded-full h-8 shrink-0 ms-3 flex cursor-pointer bg-blue-100 hover:bg-blue-200 delay-75 transition-all ease-in hover:ease-out text-primary items-center justify-center">
                                    <p class="text-xs font-semibold px-3">Click to upload</p>
                                    <div class="bg-blue-300 size-8 rounded-full center shrink-0 text-primary">
                                        <x-svg.image />
                                    </div>
                                </label>
                            </div>
                            <x-input-error :messages="$errors->get($item['model'])" class="mt-2" />
                        </div>
                    @endforeach
                </div>

                <div class="flex w-full justify-end gap-2 mt-7">
                    <x-primary-button content="Proceed" target="savePersonalDetails" />
                </div>
            </x-modal>
        </form>
    </div>
</div>