<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PersonalDetails extends Form
{

    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required|string')]
    public string $gender = '';

    #[Validate('nullable|string')]
    public string $referral_code = '';

    #[Validate('required|string')]
    public string $driver_type = '';

    #[Validate('required|string')]
    public string $vehicle_manufacturer = '';

    #[Validate('required|string')]
    public string $vehicle_model = '';

    #[Validate('required|string')]
    public string $license_plate = '';

    #[Validate('required|string')]
    public string $vehicle_color = '';
}
