<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;


new #[layout('layouts.verification')] class extends Component
{
    public int $step;

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
        $this->getStep();
    }

    #[On('update-step')]
    public function getStep()
    {
        if(session('personal_details') && session('licensing_details')) {

            $this->step = 3;
        } elseif (session('personal_details') && !session('licensing_details')) {

            $this->step = 2;
        } else {

            $this->step = 1;
        }
    }

    #[On('save-driver')]
    public function saveDriver ()
    {
        $personalDetails = session('personal_details');
        $licensingDetails = session('licensing_details');
        $documents = session('documents');
        $data = [
            'first_name' => $personalDetails['first_name'],
            'user_id' => session('id'),
            'middle_name' => $personalDetails['middle_name'],
            'last_name' => $personalDetails['last_name'],
            'gender' => $personalDetails['gender'],
            'referral_code' => $personalDetails['referral_code'] ?? '',
            'driver_type' => $personalDetails['driver_type'],
            'driver_license_number' => $licensingDetails['license_number'],
            'driver_license_expiry' => $licensingDetails['license_expiry_date']->format('Y-m-d'),
            'vehicle_manufacturer' => $personalDetails['vehicle_manufacturer'],
            'vehicle_model' => $personalDetails['vehicle_model'],
            'vehicle_year' => $personalDetails['vehicle_year'],
            'vehicle_color' => $personalDetails['vehicle_color'],
            'profile_photo' => $documents['driver_profile_photo'],
            'car_photo_inner' => $documents['car_interior_photo'],
            'car_photo_outter' => $documents['car_exterior_photo'],
            'driver_license_document' => $documents['driver_license'],
            'vehicle_license_certification' => $documents['vehicle_license_certificate'],
            'certification_of_roadworthiness' => $documents['road_worthiness_certificate'],
            'issued_id' => $documents['government_issued_id'],
            'proof_of_ownership' => $documents['proof_of_ownership_certificate'],
            'screenshot_of_dashboard' => $documents['screenshot_of_dashboard'] ?? ' ',
            'screenshot_of_rating' => $documents['screenshot_of_rating'] ?? '',
            'screenshot_of_notification' => $documents['screenshot_of_notification'] ?? ''
        ];
        DB::table('driver')->insert($data);
        $this->redirectRoute('verification.complete');
    }
}; 
?>

<div>
    <div class="w-full min-h-[13rem] md:min-h-36 p-4 bg-white flex flex-col shadow-sm justify-center">
        <div class="max-w-5xl w-full mx-auto text-center">
            <h1 class="text-4xl font-semibold text-black">
                Register as a driver
            </h1>
        </div>
    </div>



    <div class="max-w-3xl mx-auto">
        <x-steps :step="$step" />
        @if ($step === 1)
            <livewire:verification.step-one>
        
        @elseif ($step === 2)
            <livewire:verification.step-two>

        @elseif ($step === 3)
            <livewire:verification.step-three>

        @endif
    </div>

</div>